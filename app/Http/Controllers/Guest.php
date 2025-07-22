<?php

namespace App\Http\Controllers;

use App\Helpers\Webwala\Webwala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use App\Helpers\Twt\Wild_tiger;
use App\Helpers\Webwala\Webwala as WebwalaWebwala;
use App\Models\My_model;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Rules\UniqueEmail;
use Illuminate\Support\Facades\Log;
use App\Rules\CheckLastPassword;
use App\Models\Setting_model;
use App\Models\Login_model;
use Illuminate\Support\Facades\Cookie;

class Guest extends Controller
{
    public $settingsInfo;
	public $folderName;
	public $moduleName;
	public $loginCookieName;
	public $designFolderName = '';
	public $adminDesignFolderName = '';
	public $adminFolderName = '';
	public $redirectPage;
	public $perPageRecord;
	public $siteTitle;
	public $listingSequence;
	public $showConfirmBox;
	public $my_model;
	public function __construct(){
		checkHostHeadeInjection();
    	$this->my_model = new My_model();
    	$this->loginCookieName = config('constants.LOGIN_COOKIE_NAME');
    	$this->designFolderName = config('constants.DESIGN_FOLDER_PATH') ;
    	$this->adminDesignFolderName = config('constants.DESIGN_FOLDER_PATH') . config('constants.ADMIN_FOLDER') ;
    	$this->adminFolderName =  config('constants.FRONTENT_FOLDER') ;
    	$this->perPageRecord = config ( 'constants.PER_PAGE' );
    	// $this->settingModel = new Setting_model();
    	// $this->settingsInfo = $this->settingModel->getRecordDetails();
    	$this->listingSequence = config ( 'constants.LISTING_SEQUENCE' ); 
    	$this->showConfirmBox = config ( 'constants.SHOW_CONFIRM_BOX' );
    	$this->siteTitle = ( isset($this->settingsInfo->v_site_title) ? (checkNotEmptyString($this->settingsInfo->v_site_title) ? $this->settingsInfo->v_site_title : ''  ) :  ''  );
    }
    
    public function loadAdminViews($viewName , $pageData ){
    	$pageInfo = [];
    	$pageInfo['settingsInfo'] = $this->settingsInfo;
    
    	if(!empty($pageData)){
    		$pageInfo = array_merge($pageInfo,$pageData);
    	}
    	//dd($pageInfo);
    	return view($viewName)->with($pageInfo);
    }
    
    public function guestView($viewName , $pageData ){
    	
    	return $this->loadAdminViews($viewName, $pageData);
    }
    
    
    
    private function getAllowedMineTypes($allowedExtensions = [ 'jpg' , 'jpeg' , 'png' ] ){
    	$allowedMimeTypes = [];
    	if(!empty($allowedExtensions)){
    		foreach($allowedExtensions as $allowedExtension){
    			switch(strtolower($allowedExtension)){
    				case 'jpg':
    					$allowedMimeTypes[] = "image/jpeg";
    					break;
    				case 'jpeg':
    					$allowedMimeTypes[] = "image/jpeg";
    					break;
    				case 'png':
    					$allowedMimeTypes[] = "image/png";
    					break;
    				case 'pdf':
    					$allowedMimeTypes[] = "application/pdf";
    					break;
    			}
    		}
    	}
    	return $allowedMimeTypes;
    }
    
    public function uploadFile( $request , $folderName , $fieldName ,  $allowedExtensions = [ 'jpg' , 'jpeg' , 'png' ] , $required = false  , $ceatethumb = true ){
    
    	if (! file_exists(config('constants.FILE_STORAGE_PATH') . config('constants.UPLOAD_FOLDER'))) {
    		mkdir(config('constants.FILE_STORAGE_PATH') . config('constants.UPLOAD_FOLDER'), 0777, true);
    	}
    	
    	if (! file_exists(config('constants.FILE_STORAGE_PATH') . config('constants.UPLOAD_FOLDER') . $folderName)) {
    		mkdir(config('constants.FILE_STORAGE_PATH') . config('constants.UPLOAD_FOLDER') . $folderName, 0777, true);
    	}
    	
    	$response = [];
    	$response['status'] = false;
    	$response['message'] = trans('messages.required-upload-field-validation' , [ 'fieldName' => trans('messages.file') ]);
    	if($request->hasFile($fieldName)) {
    
    		$allowedMimeTypes = $this->getAllowedMineTypes($allowedExtensions);
    		
    		$uploadedFileMimeType = strtolower($request->$fieldName->getClientMimeType());
    
    		if(!in_array($uploadedFileMimeType,$allowedMimeTypes)){
    			$errorMessage = trans('messages.error-only-specific-are-allowed' , [ 'fileType' => implode(", " , $allowedExtensions ) ] );
    			$response['message'] = $errorMessage;
    			return $response;
    		}
    
    		$uploadedFileExtension = $request->$fieldName->getClientOriginalExtension();
    
    		if(!in_array(strtolower($uploadedFileExtension),$allowedExtensions)){
    			$errorMessage = trans('messages.error-only-specific-are-allowed' , [ 'fileType' => implode(", " , $allowedExtensions ) ] );
    			$response['message'] = $errorMessage;
    			return $response;
    		}
    
    		// Get filename with extension
    		$filenameWithExt = $request->file($fieldName)->getClientOriginalName();
    
    		// Get just filename
    		$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    		$filename = createSlug( strtolower($filename) );
    		// Get just ext
    		$extension = $uploadedFileExtension;
    
    		//Filename to store
    		$fileNameToStore = $filename.'_'.uniqid().'.'.$extension;
    
    
    		// Upload Image
    		$uploadedImagePath = $request->file($fieldName)->storeAs( config('constants.UPLOAD_FOLDER') .  $folderName , $fileNameToStore);
    
    		$response['status'] = true;
    		$response['filePath'] = $folderName .  $fileNameToStore;
    
    		return $response;
    		 
    	}
    	
    	if ($required != false) {
    	
    		$response['status'] = false;
    		$response['image'] = trans('messages.required-upload-field-validation' , [ 'fieldName' => trans('messages.file') ]);
    	}
    
    	return $response;
    }
    
    public function uploadMultipleFiles( $request , $folderName , $fieldName , $finalSelectedImage = null , $removeFileImages = null , $allowedExtensions = [ 'jpg' , 'jpeg' , 'png' ] ){
    
    	if (! file_exists(config('constants.FILE_STORAGE_PATH') . config('constants.UPLOAD_FOLDER'))) {
    		mkdir(config('constants.FILE_STORAGE_PATH') . config('constants.UPLOAD_FOLDER'), 0777, true);
    	}
    	 
    	if (! file_exists(config('constants.FILE_STORAGE_PATH') . config('constants.UPLOAD_FOLDER') . $folderName)) {
    		mkdir(config('constants.FILE_STORAGE_PATH') . config('constants.UPLOAD_FOLDER') . $folderName, 0777, true);
    	}
    	
    	$uploadedImagePath = [];
    
    	$finalSelectedImage = (!empty($finalSelectedImage) ? explode(",", $finalSelectedImage) : [] );
    	
    	$removeFileImages = (!empty($removeFileImages) ? explode(",", $removeFileImages) : [] );
    	$response = [];
    	$response['status'] = false;
    	$response['message'] = trans('messages.required-upload-field-validation' , [ 'fieldName' => trans('messages.file') ]);
    	if($request->hasFile($fieldName)) {
    
    		foreach($request->file($fieldName) as $file){
    			
    			$uploadedFileExtension = $file->getClientOriginalExtension();
    			
    			// Get filename with extension
    			$filenameWithExt = $file->getClientOriginalName();
    			
    			if( ( in_array( $filenameWithExt, $finalSelectedImage ) ) && ( !in_array( $filenameWithExt , $removeFileImages ) ) ){
    				
    				$allowedMimeTypes = $this->getAllowedMineTypes($allowedExtensions);
    				$uploadedFileMimeType = strtolower($file->getClientMimeType());
    				
    				if(!in_array($uploadedFileMimeType,$allowedMimeTypes)){
    					$errorMessage = trans('messages.error-only-specific-are-allowed' , [ 'fileType' => implode(", " , $allowedExtensions ) ] );
    					$response['message'] = $errorMessage;
    					return $response;
    				}
    				
    				if(!in_array(strtolower($uploadedFileExtension),$allowedExtensions)){
    					$errorMessage = trans('messages.error-only-specific-are-allowed' , [ 'fileType' => implode(", " , $allowedExtensions ) ] );
    					$response['message'] = $errorMessage;
    					return $response;
    				}
    				
    				// Get just filename
    				$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
    				$filename = createSlug( strtolower($filename) );
    				// Get just ext
    				$extension = $uploadedFileExtension;
    				 
    				//Filename to store
    				$fileNameToStore = $filename.'_'.uniqid().'.'.$extension;
    				 
    				$doUplod= $file->storeAs( Config::get('constants.UPLOAD_FOLDER') . $folderName , $fileNameToStore);
    				$uploadedImagePath[] = $folderName .  $fileNameToStore;
    			}
    		}
    	}
    	$response['status'] = true;
    	$response['message'] = trans('messages.success');
    	$response['filePath'] = $uploadedImagePath;
    	return $response;
    }
    
    public function ajaxResponse($status , $messages , $data = [] ){
    	$result = [];
    	$result['status_code'] = $status;
    	$result['message'] = $messages;
    	if(!empty($data)){
    		$result['data'] = (!empty($data) ? $data : null );
    	}
    	echo json_encode($result);die;
    }
	
	
    
    public function customLogEntry(Request $request){
    	Log::info(print_r($request->all(),true));
    }
    
    public function expectionLogEntry($postData , $e){
    	Log::info(print_r($postData,true));
    	Log::info(print_r($e->getMessage(),true));
    }
    
    
    
    public function convertFilterRequest($request , $modulePerPage = 10 ){
    	//log_message('debug', print_r($request,true));
    	$draw = (!empty($request->post('draw')) ? $request->post('draw') : config('constants.DEFAULT_PAGE_INDEX') );
    
    	$offset = (!empty($request->post('start')) ? $request->post('start') : 0 );
    
    	$limit = (!empty($request->post('length')) ? $request->post('length') : $this->perPageRecord );// Rows display per page
    
    	$columnName = $columnIndex =  $columnSortOrder = '';
    
    	$columnIndex = (!empty($request->post('order')[0]['column']) ? $request->post('order')[0]['column'] : '' )  ; // Column index
    	$columnName = (!empty($request->post('columns')[$columnIndex]['data']) ? $request->post('columns')[$columnIndex]['data'] : '' );// Column name
    	$columnSortOrder = (!empty($request->post('order')[0]['dir']) ? $request->post('order')[0]['dir'] : '' )  ;// asc or desc
    
    	$searchValue = (!empty($request->post('search')['value']) ? trim($request->post('search')['value']) : '' );
    
    	$fieldData = [];
    	$fieldData['draw'] = $draw;
    	$fieldData['offset'] = $offset;
    	$fieldData['limit'] = $limit;
    	$fieldData['tableSearch'] = $searchValue;
    	$fieldData['columnSortOrder'] = $columnSortOrder;
    	$fieldData['sortColumnName'] = $columnName;
    
    	return $fieldData;
    }
    
    protected function commonLoginSessionEntry($checkLogin, $loginPassword = null){
    	Session::put('user_id', $checkLogin->i_id);
    	Session::put('name', $checkLogin->v_name);
    	Session::put('role', $checkLogin->v_role);
    	Session::put('email', $checkLogin->v_email);
    	Session::put('isLoggedIn', true);
    	Session::put('site_title', $this->siteTitle);
    		
    	$_SESSION['login_application_user'] = true;
    	
    	if( !in_array( $checkLogin->v_email , config('constants.DEFAULT_ADMIN_EMAIL') ) ){
    		$loginHistoryId = [];
    		$loginHistoryId['i_login_id'] = $checkLogin->i_id;
    		$loginHistoryId['i_session_id'] = session()->get('_token');
    		
    		// $insertLogin = $this->my_model->insertTableData( config('constants.LOGIN_HISTORY_TABLE') , $loginHistoryId);
    	}
    	if (session()->has('keep_me_logged_in') && session()->get('keep_me_logged_in') == config('constants.SELECTION_YES')){
    		$loginPassword = ( isset( $loginPassword ) && ( !empty( $loginPassword ) ) ? $loginPassword : ((session()->has('session_login_password') && session()->get('session_login_password')) ? session()->get('session_login_password') : '') );
    		
    		Cookie::queue(Cookie::make($this->loginCookieName.'_user_login', $checkLogin->v_email, config('constants.REMEMBER_ME_TIME')));
    		Cookie::queue(Cookie::make($this->loginCookieName.'_user_password', Webwala::encode($loginPassword), config('constants.REMEMBER_ME_TIME')));
    	}
    }
}
