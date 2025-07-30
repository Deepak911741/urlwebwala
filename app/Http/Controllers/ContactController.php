<?php

namespace App\Http\Controllers;

use App\Models\contectModel;
use App\Helpers\Webwala\Webwala;
use App\Models\serviceModel;
use App\Models\Setting_model;
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
        $this->redirectUrl = config('constants.CONTACT_URL');
    }

    public function add(Request $request){
		
		$formValidation = [];
		$formValidation['name'] = ['required'];
		$formValidation['email'] = ['required'];
		$formValidation['phone'] = ['required'];
		
		$validator = Validator::make ( $request->all (), $formValidation , [
			'firstName.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.first-name") ]),
			'email.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.email-id") ]),
			'mobile.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.mobile-no") ]),
		]);
		
		if ($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}
		
		$recordData = [];
		$recordData['v_firstname'] = (checkNotEmptyString($request->input('name')) ? trim($request->input('name')) : '');
		$recordData['v_email'] = (checkNotEmptyString($request->input('email')) ? trim($request->input('email')) : null);
		$recordData['v_mobile'] = (checkNotEmptyString($request->input('phone')) ? trim($request->input('phone')) : null);
		$recordData['i_service_id'] = (!empty($request->input('service_id')) ? Webwala::decode($request->input('service_id')) : 0);
		$recordData['v_message'] = (checkNotEmptyString($request->input('message')) ? trim($request->input('message')) : null);
		
		$successMessage = trans ('📩 Thank you for reaching out! We\'ve received your message and our team will get back to you shortly.');
		$errorMessage = trans ( 'messages.error-create', ['module' => $this->moduleName]);
		
		$result = false;
		
		DB::beginTransaction();
		
		try{
			$whereData = [];
			$whereData['i_id'] = $recordData['i_service_id'];
			$whereData['singleRecord'] = true;
			$serviceInfo = (new serviceModel)->getRecordDetails($whereData);

			$settingModel = new Setting_model();

			$where = [];
			$where['isBackendRequest'] = true;
			$settingsInfo = $settingModel->getRecordDetails($where);
			$recordType = "Contact Us";
			$mailData = [];
			$mailData['name'] = (checkNotEmptyString($request->input('name')) ? trim($request->input('name')) : '');
			$mailData['mobile'] = (checkNotEmptyString($request->input('phone')) ? trim($request->input('phone')) : '');
			$mailData['email'] = (checkNotEmptyString($request->input('email')) ? trim($request->input('email')) : '');
			$mailData['serviceName'] = (isset($serviceInfo->v_service_name) ? $serviceInfo->v_service_name : '');
			$mailData['commentMessage'] = (checkNotEmptyString($request->input('message')) ? trim($request->input('message')) : null);
			$mailData['recordType'] = $recordType;

			$config = [];
			$config['to'] = $mailData['email'];
			$config['subject'] = "New ".$recordType." Mail From " . ( isset($settingsInfo->v_mail_title) && checkNotEmptyString($settingsInfo->v_mail_title) ? $settingsInfo->v_mail_title : '' );
			$config['mailData'] = $mailData;
			$config['viewName'] = 'mailtemplate/contact-us-mailtemplate';

			$sendMail = sendMailSMTP($config);
		
			$this->crudModel->insertTableData( config('constants.CONTACT_MASTER') , $recordData);
			$result = true;
		}catch(\Exception $e){
			$result = false;
			\Log::error($e->getMessage());
			DB::rollBack();
		}
		
		if( $result != false ){
			DB::commit();
			Webwala::setFlashMessage('success', $successMessage);
		} else {
			DB::rollBack();
			Webwala::setFlashMessage('danger', $errorMessage);
		}
		
		return redirect($this->redirectUrl);
		
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
