<?php

namespace App\Http\Controllers;

use App\Helpers\Webwala\Webwala;
use App\Models\newLatterModel;
use App\Models\serviceModel;
use App\Models\Setting_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class NewslatterController extends MY_Controller
{
    public function __construct(){
        parent::__construct();
        $this->crudModel = new newLatterModel();
        $this->tableName = config('constants.NEWSLATTER_TABLE');
        $this->moduleName = trans('messages.newsletter');
        $this->redirectUrl = config('constants.ADMIN_FOLDER') . '/newslatter';
    }

    public function list(Request $request){
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
                $rowData['email'] = (checkNotEmptyString($recordDetail->v_email) ? $recordDetail->v_email : '' );
                $rowData['mobile'] = (checkNotEmptyString($recordDetail->v_mobile) ? $recordDetail->v_mobile : '' );
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
			$likeData = [ 'value' => $searchValue, 'columnName' => ['v_mobile', 'v_email'] ];
		}
			
		
		$response = [];
		$response['where'] = $whereData;
		$response['like'] = $likeData;
		$response['additional'] = $additionalData;
	
		return $response;
	}

    public function add(Request $request){
        
		$formValidation = [];
		$formValidation['email'] = ['required'];
		$formValidation['mobile'] = ['required'];
		
		$validator = Validator::make ( $request->all (), $formValidation , [
			'email.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.email-id") ]),
			'mobile.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.mobile-no") ]),
		]);
		
		if ($validator->fails()){
			return redirect()->back()->withErrors($validator)->withInput();
		}
		
		$recordData = [];
		$recordData['v_email'] = (checkNotEmptyString($request->input('email')) ? trim($request->input('email')) : null);
		$recordData['v_mobile'] = (checkNotEmptyString($request->input('mobile')) ? trim($request->input('mobile')) : null);
		$recordData['i_service_id'] = (checkNotEmptyString($request->input('service_id')) ? Webwala::decode($request->input('service_id')) : null);
		
		$successMessage = trans('🎉 Thank you for subscribing! <br> You’re now part of the URLWebwala family. We’ll keep you updated with the latest news and special offers.');
		$errorMessage = trans('newslatter-subscribe-error');
		
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
			$recordType = "Newsletter";
			$mailData = [];
			$mailData['mobile'] = (checkNotEmptyString($request->input('mobile')) ? trim($request->input('mobile')) : '');
			$mailData['email'] = (checkNotEmptyString($request->input('email')) ? trim($request->input('email')) : '');
			$mailData['serviceName'] = (isset($serviceInfo->v_service_name) ? $serviceInfo->v_service_name : '');
			$mailData['recordType'] = $recordType;

			$config = [];
			$config['to'] = $mailData['email'];
			$config['subject'] = "New ".$recordType." Mail From " . ( isset($settingsInfo->v_mail_title) && checkNotEmptyString($settingsInfo->v_mail_title) ? $settingsInfo->v_mail_title : '' );
			$config['mailData'] = $mailData;
			$config['viewName'] = 'mailtemplate/newslatter-mailtemplate';

			$sendMail = sendMailSMTP($config);

			$this->crudModel->insertTableData( config('constants.NEWSLATTER_TABLE') , $recordData);
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
		
		return redirect(config('constants.HOME_URL'));
		
	}
}
