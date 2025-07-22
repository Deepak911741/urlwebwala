<?php

namespace App\Http\Controllers;

use App\Helpers\Webwala\Webwala;
use App\Models\clientModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ClientController extends MY_Controller
{
    public function __construct(){
        parent::__construct();
        $this->crudModel = new clientModel();
        $this->tableName = config('constants.CLIENT_TABLE');
        $this->moduleName = trans('messages.client');
        $this->folderName = config('constants.ADMIN_FOLDER') . 'client/';  
    }

    public function add(Request $request){

        $recordId = (!empty($request->input('record_id')) ? (int)Webwala::decode($request->input('record_id')) : 0);
        $formValidation = [];
        $formValidation['client_name'] = ['required'];
        
        $validator = Validator::make($request->all(), $formValidation, [
            'client_name.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.client-name") ]),
        ]);

        if($validator->fails()){
            return apiResponse(404, $validator->errors()->first());
        }

        $uploadLogoImage = null;

        if (!empty($request->file('image'))) {
            if ($recordId > 0) {
                $whereData['countRecord'] = true;
                $whereData['i_id'] = $recordId;
                $oldRecord = $this->crudModel->getRecordDetails($whereData);
                if ($oldRecord && !empty($oldRecord->v_image)) {
                    $oldImagePath = public_path($oldRecord->v_image);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }
            }

            $fileUpload = $this->uploadFile($request, $this->folderName, 'image');
            if (isset($fileUpload['status']) && ($fileUpload['status'] != false)) {
                $uploadLogoImage = $fileUpload['filePath'];
            }
        }

        if ($recordId > 0 && empty($uploadLogoImage)) {
            $whereData['countRecord'] = true;
            $whereData['i_id'] = $recordId;
            $oldRecord = $this->crudModel->getRecordDetails($whereData);
            if ($oldRecord && !empty($oldRecord->v_image)) {
                $uploadLogoImage = $oldRecord->v_image;
            }
        }

        $recordData = [];
        $recordData['v_client_name'] = (checkNotEmptyString($request->input('client_name')) ? trim($request->input('client_name')) : null);  
        $recordData['v_image'] = (!empty($uploadLogoImage) ? $uploadLogoImage : null);  
        $recordData['v_weburl'] = (checkNotEmptyString($request->input('weburl')) ? trim($request->input('weburl')) : null);  
        $recordData['v_email'] = (checkNotEmptyString($request->input('email')) ? trim($request->input('email')) : null);    
        $recordData['v_phone'] = (checkNotEmptyString($request->input('phone')) ? trim($request->input('phone')) : null);    
        

        $successMessage = trans('messages.success-create', ['module' => $this->moduleName]);
		$errorMessage = trans('messages.error-create', ['module' => $this->moduleName]);
		
		$result = false;
		
		DB::beginTransaction();
		
		try{
            if($recordId > 0){
                $successMessage = trans ( 'messages.success-update', ['module' => $this->moduleName]);
                $errorMessage = trans ( 'messages.error-update', [ 'module' => $this->moduleName] );

                $this->crudModel->updateTableData(config('constants.CLIENT_TABLE') , $recordData , ['i_id' => $recordId]);
            } else {
                $this->crudModel->insertTableData(config('constants.CLIENT_TABLE') , $recordData);
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

    public function edit($recordId = null){
        $recordId = (!empty($recordId) ? (int)Webwala::decode($recordId) : 0);
        $whereData = [];
        $whereData['singleRecord'] = true;
        $whereData['i_id'] = $recordId;
        $recordDetails = $this->crudModel->getRecordDetails($whereData);

        $data = [];
        if(!empty($recordDetails)){
            $data['record_id'] = Webwala::encode($recordDetails->i_id);
            $data['client_name'] = (checkNotEmptyString($recordDetails->v_client_name) ? $recordDetails->v_client_name : '' );
            $data['email'] = (checkNotEmptyString($recordDetails->v_email) ? $recordDetails->v_email : '' );
            $data['phone'] = (checkNotEmptyString($recordDetails->v_phone) ? $recordDetails->v_phone : '' );
            if(!empty($recordDetails->v_image)){
                $data['image'] = getUploadedAssetUrl($recordDetails->v_image);  
            }
        }
        return apiResponse(200, 'success', $data);
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
                case 'client_name':
                    $columnName = 'v_client_name';
                    break;
                case 'email':
                    $columnName = 'v_email';
                    break;
                case 'phone':
                    $columnName = 'v_phone';
                    break;
                case 'weburl':
                    $columnName = 'v_weburl';
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
                
                $rowData['sr_no'] = ++$index;
                $rowData['record_id'] = (!empty($encodeRecordId) ? $encodeRecordId : '');
                $rowData['client_name'] = (checkNotEmptyString($recordDetail->v_client_name) ? $recordDetail->v_client_name : '' );
                $rowData['weburl'] = (checkNotEmptyString($recordDetail->v_weburl) ? $recordDetail->v_weburl : '' );
                $rowData['email'] = (checkNotEmptyString($recordDetail->v_email) ? $recordDetail->v_email : '' );
                $rowData['phone'] = (checkNotEmptyString($recordDetail->v_phone) ? $recordDetail->v_phone : '' );
                $rowData['status'] = (!empty($recordDetail->t_is_active == config('constants.ACTIVE_STATUS')) ? true : false );
                $rowData['date'] = (checkNotEmptyString($recordDetail->dt_created_at) ? clientDateTime($recordDetail->dt_created_at) : '' );
                
                if(!empty($recordDetail->v_image)){
                    $rowData['image'] = getUploadedAssetUrl($recordDetail->v_image);
                }
                
                $finalData[] = $rowData;
            }

            $response = array(
                "draw" => intval($draw),
                "iTotalRecords" => count($finalData),
                "iTotalDisplayRecords" => $totalRecords,
                "aaData" => $finalData
            );
           
            return apiResponse(200, 'success', $response);
        }
            
    }

    private function commonFilterData($request = null){
		$whereData = $likeData = $additionalData = [];
		
		if(checkNotEmptyString($request->post('search_by')) ){
			$searchValue = trim($request->input ('search_by' ));
			$likeData = [ 'value' => $searchValue, 'columnName' => ['v_client_name' , 'v_mobile', 'v_email'] ];
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
