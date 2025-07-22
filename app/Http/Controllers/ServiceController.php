<?php

namespace App\Http\Controllers;

use App\Helpers\Webwala\Webwala;
use App\Models\newLatterModel;
use App\Models\serviceModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ServiceController extends MY_Controller
{
    public function __construct(){
        parent::__construct();
        $this->crudModel = new serviceModel(); 
        $this->tableName = config('constants.SERVICE_TABLE');
        $this->moduleName = trans('messages.service');
        $this->redirectUrl = config('constants.ADMIN_FOLDER') . '/service';
    }

    public function add(Request $request){

        $recordId = (!empty($request->input('record_id')) ? (int)Webwala::decode($request->input('record_id')) : 0);
        $formValidation = [];
        $formValidation['service_name'] = ['required'];
        
        $validator = Validator::make($request->all(), $formValidation, [
            'service_name.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.service-name") ]),
        ]);

        if($validator->fails()){
            return apiResponse(404, $validator->errors()->first());
        }

        $recordData = [];
        $recordData['v_service_name'] = (checkNotEmptyString($request->input('service_name')) ? trim($request->input('service_name')) : null);  

        $successMessage = trans('messages.success-create', ['module' => $this->moduleName]);
		$errorMessage = trans('messages.error-create', ['module' => $this->moduleName]);
		
		$result = false;
		
		DB::beginTransaction();
		
		try{
            if($recordId > 0){
                $successMessage = trans ( 'messages.success-update', ['module' => $this->moduleName]);
                $errorMessage = trans ( 'messages.error-update', [ 'module' => $this->moduleName] );

                $this->crudModel->updateTableData(config('constants.SERVICE_TABLE') , $recordData , ['i_id' => $recordId]);
            } else {
                $this->crudModel->insertTableData(config('constants.SERVICE_TABLE') , $recordData);
            }
			$result = true;
		}catch(\Exception $e){
			$result = false;
			\Log::error($e->getMessage());
			DB::rollBack();
		}
		
		if( $result != false ){
			DB::commit();
			return apiResponse(200, 'success', $successMessage);
		} else {
			DB::rollBack();
			return apiResponse(500, 'error', $errorMessage);
		}
    }

    public function list(Request $request) {
		$whereData = $likeData  = $additionalData =  [];
		
		$fieldData = $this->convertFilterRequest($request);
		
		$searchValue = $fieldData['tableSearch'];
		$columnName = $fieldData['sortColumnName'];
		$columnSortOrder = $fieldData['columnSortOrder'];
		$offset = $fieldData['offset'];
		$draw = $fieldData['draw'];
		$limit = $fieldData['limit'];
		
		$filterData = $this->commonFilterData($request);
		$whereData = (isset($filterData['where']) ? $filterData['where'] : []);
		$likeData = (isset($filterData['like']) ? $filterData['like'] : []);
		
		if(!empty($columnName)) {
			switch($columnName){
				case 'service_name':
					$columnName = 'v_service_name';
					break;
			}
			$whereData['order_by'] = [ $columnName =>  ( (!empty($columnSortOrder)) ? $columnSortOrder : 'DESC' ) ];
		} else {
			$whereData['order_by'] =  [ 'i_id' =>  'desc'];
		}
		
		$whereData['countRecord'] = true;
		
		$totalRecords = $this->crudModel->getRecordDetails($whereData, $likeData);
		
		unset($whereData['countRecord']);

		$whereData['offset'] = $offset;

		$whereData['limit'] = $limit;
		
		$recordDetails = $this->crudModel->getRecordDetails($whereData, $likeData);
		
		$finalData = [];
			
		if(!empty($recordDetails)){
			$index = $offset;
			foreach($recordDetails as $key => $recordDetail){
				$encodeRecordId = Webwala::encode($recordDetail->i_id);

				$rowData = [];
                $rowData['sr_no'] = ++$index;
				$rowData['record_id'] = (checkNotEmptyString($encodeRecordId) ? $encodeRecordId : '' );
				$rowData['service_name'] = (checkNotEmptyString($recordDetail->v_service_name) ? $recordDetail->v_service_name : '' );
				$rowData['date'] = (checkNotEmptyString($recordDetail->dt_created_at) ? clientDateTime($recordDetail->dt_created_at) : '' );
				
				$finalData[] = $rowData;
			}
		}
			
		$response = array(
				"draw" => intval($draw),
				"iTotalRecords" => count($finalData),
				"iTotalDisplayRecords" => $totalRecords,
				"aaData" => $finalData
		);
			
		return apiResponse(200, 'success', $response);
	}

    private function commonFilterData($request = null){
		$whereData = $likeData = $additionalData = [];
		
		if(checkNotEmptyString($request->post('search_by')) ){
			$searchValue = trim($request->input ('search_by' ));
			$likeData = [ 'value' => $searchValue, 'columnName' => ['v_service_name' , 'v_mobile', 'v_email'] ];
		}
			
		if( !empty($request->post('search_status')) ){
			$whereData['t_is_active'] = trim($request->post('search_status')) == config('constants.ENABLE_STATUS') ? config('constants.ACTIVE_STATUS') : config('constants.INACTIVE_STATUS');
		}
	
		$response = [];
		$response['where'] = $whereData;
		$response['like'] = $likeData;
		$response['additional'] = $additionalData;
	
		return $response;
	}

    public function edit($recordId = null ) {
		
		if(!empty($recordId)){
			$recordId = (int)Webwala::decode($recordId);
			
			if( $recordId > 0 ){
				$whereData = [];
				$whereData['singleRecord'] = true;
				$whereData['i_id'] = $recordId;
				$recordInfo = $this->crudModel->getRecordDetails($whereData);
				
				if(!empty($recordInfo)){
					
					$data['service_name'] = $recordInfo->v_service_name;
                    $data['record_id'] = Webwala::encode($recordInfo->i_id);
					$data['pageTitle'] = trans ('messages.update-service');
					return apiResponse(200, 'success', $data);
				}
			}
		}
	}

    public function delete(Request $request){
		if(!empty($request->input())){
			$recordId = (!empty($request->input('delete_record_id')) ? (int)Webwala::decode( $request->input('delete_record_id') ) : 0 );
			
			if($recordId  > 0 ){
				$errorFound = false;
				
				return $this->removeRecord($this->tableName, $recordId, $this->moduleName);
			}
		}
		
	}
	
	public function updateStatus(Request $request){
        
		if(!empty($request->input())){
			return $this->updateMasterStatus($request , $this->tableName,  $this->moduleName);
		}
	}

}
