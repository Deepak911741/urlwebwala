<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Helpers\Twt\Wild_tiger;
use App\Helpers\Webwala\Webwala;
use App\Models\My_model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Guest;
use Illuminate\Support\Facades\Log;

class MY_Controller extends Guest
{
	public $permissions;
	public $loggedUserRole;
	public $loggedUserName;
	public $loggedUserId;
    public $defaultPage;
	public $tableName;
	public $crudModel;
	public $redirectUrl;
    
	public function __construct(){
		parent::__construct();
		// $this->isLoggedIn();
		$this->my_model = new My_model();
		$this->defaultPage = config ( 'constants.DEFAULT_PAGE_INDEX' );
		
	}
		
	// protected function isLoggedIn(){
	// 	$this->middleware('checklogin');
	// }
	
	public function getMultipleQuery($procName, $parameters = [], $isExecute = false){
		 
		$syntax = '';
		for ($i = 0; $i < count($parameters); $i++) {
			$syntax .= (!empty($syntax) ? ',' : '') . '?';
		}
		$syntax = 'CALL ' . $procName . '(' . $syntax . ');';
	
		$pdo = DB::connection()->getPdo();
		$pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, true);
		$stmt = $pdo->prepare($syntax,[\PDO::ATTR_CURSOR=>\PDO::CURSOR_SCROLL]);
		for ($i = 0; $i < count($parameters); $i++) {
			$stmt->bindValue((1 + $i), $parameters[$i]);
		}
		$exec = $stmt->execute();
		if (!$exec) return $pdo->errorInfo();
		if ($isExecute) return $exec;
	
		$results = [];
		do {
			try {
				$results[] = $stmt->fetchAll(\PDO::FETCH_OBJ);
			} catch (\Exception $ex) {
	
			}
		} while ($stmt->nextRowset());
	
	
		if (1 === count($results)) return $results[0];
		return $results;
	}
	
	protected function accessDenidePage() {
		$data['pageTitle'] = trans('messages.access-denied');
		return $this->loadAdminViews($this->adminFolderName . 'restricted', $data);
	}
	
	public function createThumbnail($imagePath,$folderPath,$width = 75 ,$height = 50){
        $this->load->library('image_lib');
        
        if (! file_exists($folderPath . 'thumb')) {
            mkdir($folderPath . 'thumb', 0777, true);
        }
        
        $config['image_library'] = 'gd2';
        $config['source_image'] = $imagePath;
        $config['new_image'] = $folderPath . 'thumb';
        $config['thumb_marker'] = '';
        
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']     = 75;
        $config['height']   = 50;
    
        $this->image_lib->clear();
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        
    }
	
	public function updateMasterStatus( $request , $tableName , $moduleName ){
    	$recordId = (!empty($request->record_id) ? (int)Webwala::decode($request->record_id) : 0  );
    	
    	$currentStatus = trim($request->current_status);
    	
    	$updateData = [];
    	
    	switch ($currentStatus){
    		case  ( config('constants.ENABLE_STATUS') ):
    			$updateStatus = trans('messages.disable');
    			$updateData['t_is_active']  = config('constants.INACTIVE_STATUS');
    			break;
    		case  ( config('constants.DISABLE_STATUS') ):
    			$updateStatus = trans('messages.enable');
    			$updateData['t_is_active']  = config('constants.ACTIVE_STATUS');
    			break;
    		case  ( config('constants.ACTIVE_STATUS_TEXT') ):
    			$updateStatus = trans('messages.inactive');
    			$updateData['t_is_active']  = config('constants.INACTIVE_STATUS');
    			break;
    		case  ( config('constants.INACTIVE_STATUS_TEXT') ):
    			$updateStatus = trans('messages.active');
    			$updateData['t_is_active']  = config('constants.ACTIVE_STATUS');
    			break;
    						
    	}
    	
    	$updatedmodule =  $moduleName;
    	
    	if(!empty($updateData)){
    		$result = false;
    		DB::beginTransaction();
    	
    		try {
    			$this->my_model->updateTableData($tableName ,$updateData , ['i_id' => $recordId]);
    			
    			$result = true;
    		} catch (\Exception $e) {
    			$result = false;
    			DB::rollBack();
    			Log::error($e->getMessage());
    		}
    		
    		if( $result != false ){
    			DB::commit();
    			$message = trans ( 'messages.success-status-update', [ 'module' => $updatedmodule ] );
				return apiResponse(200, 'success', $message);
    		}
    	}
    	
    	DB::rollback();
    	$message = trans ( 'messages.error-status-update', [ 'module' => $updatedmodule ] );
		return apiResponse(500, 'error', $message);
    }
    
    public function removeRecord($tableName , $recordId , $messageModuleName ){
    	if( $recordId > 0 && (!empty($tableName)) ){
    		$result = false;
    		DB::beginTransaction();
    		
    		try {
    			$this->my_model->deleteTableData(  $tableName ,  [] , [ 'i_id' => $recordId ] );
    			
    			$result = true;
    		} catch (\Exception $e) {
    			$result = false;
    			DB::rollBack();
    			Log::error($e->getMessage());
    		}
    		
    		if( $result != false ){
    			DB::commit();
				return apiResponse(200, trans('messages.success-delete', ['module' => enumText($messageModuleName)] ));
    		} else {
				DB::rollback();
				return apiResponse(404, trans('messages.error-delete', ['module' => enumText($messageModuleName)] ));
    		}
    	}
    	
    	DB::rollback();
    	return apiResponse(404, trans ( 'messages.error-delete', [ 'module' => enumText($messageModuleName) ] ) );
    }
    
    public function logLastQuery(){
    	Log::info(My_model::last_query());
    }
    
    public function multipleSearch( $fieldData , $columnName , $condition = 'OR'){
    	$searchRegion = explode("," , $fieldData );
    	$customWhere = ' ( ';
    	foreach($searchRegion as $region){
    		$customWhere.= "find_in_set(  '".$region."' , ".$columnName." ) ".$condition." ";
    	}
    	$customWhere = rtrim($customWhere , $condition.' ');
    	$customWhere .= ' ) ';
    	return $customWhere;
    }
    
    public function manageSessionMessages(Request $request){
    	if (!empty($request->all())) {
    		$sessionModuleName = (!empty($request->input('session_redirect_module_name')) ? trim($request->input('session_redirect_module_name')) : "");
    
    		if (!empty($sessionModuleName)) {
    			$successMessage = trans('messages.success-create', ['module' => $sessionModuleName]);
    			Webwala::setFlashMessage('success', $successMessage);
    		}
    	}
    	return redirect()->back();
    }
    
    public function commonSequenceFilterData($request, $filterData){
    	$response = [];
    	if(!empty($request) && !empty($filterData)){
    		$whereData = $likeData = $additionalData = [];
    		$lastPage = (!empty($request->input('last_page')) ? $request->input('last_page') : 1);
    		$limit = (!empty($request->input('length')) ? (int) $request->input('length') : $this->perPageRecord);
    
    		$whereData = ( isset($filterData['where']) ? $filterData['where'] : [] );
    		$likeData = ( isset($filterData['like']) ? $filterData['like'] : [] );
    		 
    		$whereData['order_by'] = ['i_sequence' => 'asc'];
    		$whereData['offset'] = ($lastPage - 1) * $limit;
    		$whereData['limit'] = $limit;
    
    		$response['where'] = $whereData;
    		$response['like'] = $likeData;
    	}
    	return $response;
    }
    
    public function commonUpdateSequenceData($tableName, $recordDetails = [], $newSequenceArray = []){
    	if (!empty($tableName)){
    		$result = false;
    		DB::beginTransaction();
    
    		try{
    			if (!empty($recordDetails)){
    				foreach ($recordDetails as $key => $recordDetail){
    					if (!empty($recordDetail->i_id) && isset($newSequenceArray[$key]) && $newSequenceArray[$key] == $recordDetail->i_id){ //if exact key-value pair of old id & new sequence matched, than skip this iteration
    						continue;
    					}
    					
    					$updateSequenceData = [];
    					$updateSequenceData['i_sequence'] = (!empty($recordDetail->i_sequence) ? $recordDetail->i_sequence : 0);
    					$this->my_model->updateTableData($tableName, $updateSequenceData, [ 'i_id' => $newSequenceArray[$key] ], true);
    				}
    			}
    			
    			$result = true;
    		}catch (\Exception $e){
    			$result = false;
    			DB::rollBack();
    			Log::error($e->getMessage());
    		}
    
    		if( $result != false ){
    			DB::commit();
    			$this->ajaxResponse(config('constants.SUCCESS_AJAX_CALL'), trans('messages.success-sequence-update'));
    		} else {
    			DB::rollBack();
    			$this->ajaxResponse(config('constants.ERROR_AJAX_CALL'), trans('messages.error-sequence-update'));
    		}
    	}
    }
}
