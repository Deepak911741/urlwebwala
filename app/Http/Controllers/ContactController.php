<?php

namespace App\Http\Controllers;

use App\Models\contectModel;
use App\Helpers\Webwala\Webwala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ContactController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->crudModel = new contectModel();
		$this->moduleName = trans('messages.contact-us');
        $this->tableName = config('constants.ADMIN_FOLDER');
        $this->redirectUrl = config('constants.ADMIN_FOLDER') . '/contect';
    }

    public function add(Request $request){

		$formValidation = [];
		$formValidation['firstName'] = ['required'];
		$formValidation['lastName'] = ['required'];
		$formValidation['email'] = ['required'];
		$formValidation['mobile'] = ['required'];
		
		$validator = Validator::make ( $request->all (), $formValidation , [
			'firstName.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.first-name") ]),
			'lastName.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.last-name") ]),
			'email.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.email-id") ]),
			'mobile.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.mobile-no") ]),
		]);
		
		if ($validator->fails()){
			return apiResponse(404, $validator->errors()->first());
			// return redirect()->back()->withErrors($validator)->withInput();
		}
		
		$recordData = [];
		$recordData['v_firstname'] = (checkNotEmptyString($request->input('firstName')) ? trim($request->input('firstName')) : '');
		$recordData['v_lastname'] = (checkNotEmptyString($request->input('lastName')) ? trim($request->input('lastName')) : '');
		$recordData['v_email'] = (checkNotEmptyString($request->input('email')) ? trim($request->input('email')) : null);
		$recordData['v_mobile'] = (checkNotEmptyString($request->input('mobile')) ? trim($request->input('mobile')) : null);
		$recordData['i_service_id'] = (checkNotEmptyString($request->input('service_id')) ? trim($request->input('service_id')) : null);
		$recordData['v_message'] = (checkNotEmptyString($request->input('mobile')) ? trim($request->input('mobile')) : null);
		
		$successMessage = trans ( 'messages.success-create', ['module' => $this->moduleName]);
		$errorMessage = trans ( 'messages.error-create', ['module' => $this->moduleName]);
		
		$result = false;
		
		DB::beginTransaction();
		
		try{
			$this->crudModel->insertTableData( config('constants.CONTACT_MASTER') , $recordData);
			$result = true;
		}catch(\Exception $e){
			$result = false;
			\Log::error($e->getMessage());
			DB::rollBack();
		}
		
		if( $result != false ){

			DB::commit();
			return apiResponse(200, 'success', $successMessage);
			//Webwala::setFlashMessage('success', $successMessage);
		} else {
			DB::rollBack();
			return apiResponse(500, 'error', $errorMessage);
			// Webwala::setFlashMessage('danger', $errorMessage);
		}
		
		// return redirect($this->redirectUrl);
		
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
				case 'name':
					$columnName = 'v_firstname';
					break;
				case 'email':
					$columnName = 'v_email';
					break;
				case 'mobile':
					$columnName = 'v_mobile';
					break;
			}
			$whereData['order_by'] = [ $columnName =>  ( (!empty($columnSortOrder)) ? $columnSortOrder : 'DESC' ) ];
		} else {
			$whereData['order_by'] =  [ 'i_id' =>  'desc'];
		}
		
		$whereData['countRecord'] = true;
		
		$totalRecords = $this->crudModel->getRecordDetails( $whereData  , $likeData  );
		
		unset($whereData['countRecord']);

		$whereData['offset'] = $offset;

		$whereData['limit'] = $limit;
		
		$recordDetails = $this->crudModel->getRecordDetails( $whereData , $likeData );
		
		$finalData = [];
			
		if(!empty($recordDetails)){
			$index = $offset;
			foreach($recordDetails as $key => $recordDetail){
				$encodeRecordId = Webwala::encode($recordDetail->i_id);
				
				$rowData = [];
				$rowData['sr_no'] = ++$index;
				$rowData['firstName'] = (checkNotEmptyString($recordDetail->v_firstname) ? $recordDetail->v_firstname : '' );
				$rowData['lastName'] = (checkNotEmptyString($recordDetail->v_lastname) ? ( $recordDetail->v_lastname ) : '' );
				$rowData['email'] = (checkNotEmptyString($recordDetail->v_email) ? $recordDetail->v_email : '' );
				$rowData['mobile'] = (checkNotEmptyString($recordDetail->v_mobile) ? $recordDetail->v_mobile : '' );
				$rowData['message'] = (checkNotEmptyString($recordDetail->v_message) ? $recordDetail->v_message : '' );
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
		
		if( checkNotEmptyString($request->post('search_by')) ){
			$searchValue = trim($request->input ('search_by' ));
			$likeData = [ 'value' => $searchValue, 'columnName' => ['v_firstname' , 'v_mobile', 'v_email'] ];
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

}
