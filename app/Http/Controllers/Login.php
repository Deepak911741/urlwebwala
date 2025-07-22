<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Webwala\Webwala;
use App\Models\Login_model;
use App\Http\Controllers\Guest;
use Illuminate\Support\Facades\Log;
use App\Models\My_model;

class Login extends Guest
{
	
	public $loginPage;
	public function __construct(){
		parent::__construct();
		$this->loginPage = config('constants.LOGIN_URL');
		$this->folderName = config('constants.ADMIN_FOLDER');
	} 
	
	
	public function checkLogin(Request $request){
		$validator = Validator::make($request->all(), [
				'login_email' => 'required',
				'login_password' => 'required',
		],[
				'login_email.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.email-id") ]) ,
				'login_password.required' => trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.password") ]) ,
		]
		);
		 
		if ($validator->fails()) {
			return apiResponse(404, $validator->errors()->first());
		}
		
		$email = $request->input('login_email');
		$password = $request->input('login_password');
		 
		$checkLoginWhere = [];
		$checkLoginWhere['v_email'] = $email;
		$checkLoginWhere['t_is_deleted'] = config('constants.INACTIVE_STATUS');
		if( in_array( $email , config('constants.DEFAULT_ADMIN_EMAIL') ) ){
			unset($checkLoginWhere['t_is_deleted']);
		}
		$checkLogin = Login_model::where($checkLoginWhere)->first();
		
		
		if( empty($checkLogin)){
			return apiResponse(404, trans('messages.invalid-login'));
		}
		
		if( $checkLogin->t_is_active == config('constants.INACTIVE_STATUS') ){
			return apiResponse(404, trans('messages.error-inactive-account-login'));
		}
		
		if (password_verify($password, $checkLogin->v_password)) {
	
			session()->flash('keep_me_logged_in' , (!empty($request->input('keep_me_logged_in')) ? $request->input('keep_me_logged_in') : '' ) );
			$this->commonLoginSessionEntry($checkLogin , $password);
				$data = [
                    'user_id'    => session()->has('user_id') ? session()->get('user_id') : '',
                    'name'       => session()->has('name') ? session()->get('name') : '',
                    'role'       => session()->has('role') ? session()->get('role') : '',
                    'email'      => session()->has('email') ? session()->get('email') : '',
                    'isLoggedIn' => session()->has('isLoggedIn') ? session()->get('isLoggedIn') : '',
                    'token' =>  '',
                ];
			
			return apiResponse(200, trans('messages.login-success'), $data);
			
		} else {
			return apiResponse(404, trans('messages.invalid-login'));
		}
		return apiResponse(404, trans('messages.invalid-login'));
	}
}
