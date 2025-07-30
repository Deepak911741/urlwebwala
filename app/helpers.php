<?php

use App\Models\My_model;
use App\Helpers\Twt\Wild_tiger;
use App\Helpers\Webwala\Webwala;
use App\Models\Setting_model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

if (! function_exists('is_ssl')) {
	function is_ssl() {
		if ( isset($_SERVER['HTTPS']) ) {
			if ( 'on' == strtolower($_SERVER['HTTPS']) )
				return true;
			if ( '1' == $_SERVER['HTTPS'] )
				return true;
		} elseif ( isset($_SERVER['SERVER_PORT']) && ( '443' == $_SERVER['SERVER_PORT'] ) ) {
			return true;
		}
		return false;
	}
}

if (! function_exists('monthStartDate')) {

	function monthStartDate($date = null ) {
		$result = null;
		$inputDate = (!empty($date) ? $date : date('Y-m-d'));
		if(!empty($inputDate)){
			$result  = date('Y-m-01', strtotime($inputDate) );
		}
		return $result;
	}
}

if (! function_exists('monthEndDate')) {

	function monthEndDate($date = null) {
		$result = null;
		$inputDate = (!empty($date) ? $date : date('Y-m-d'));
		if(!empty($inputDate)){
			$result  = date('Y-m-t', strtotime($inputDate) );
		}
		return $result;
	}
}

if (! function_exists('nthNumberSeries')) {
	function nthNumberSeries($value , $nth = 3) {
		$result = str_pad($value, $nth, '0', STR_PAD_LEFT);
		return $result;
	}
}

if (! function_exists('clientDate')) {

    function clientDate($value, $dbFormat = true)
    {
        $result = date('Y-m-d', strtotime($value));
        if ($dbFormat != false) {
            $result = date(config('constants.DISPLAY_DATE_FORMAT'), strtotime($value));
        }
        
        return $result;
    }
}

if (! function_exists('clientDateTime')) {

	function clientDateTime($value, $dbFormat = true)
	{
		$result = date('Y-m-d H:i:s', strtotime($value));
		if ($dbFormat != false) {
			$result = date(config('constants.DISPLAY_DATE_TIME_FORMAT'), strtotime($value));
		}

		return $result;
	}
}

if (! function_exists('clientTime')) {
	function clientTime($value)
	{
		$result = "";
		if(!empty($value)){
			$result = date('h:i A', strtotime($value));
		}

		return $result;
	}
}

if (! function_exists('dbDate')) {
	function dbDate($value, $dbFormat = true)
	{
		$result = null;
		if(!empty($value)){
			$value = str_replace("/", "-", $value);
			$result = date('Y-m-d', strtotime($value));
		}
		return $result;
	}
}

if (!function_exists('formatDateFancy')) {
    function formatDateFancy($date)
    {
        return date('F d, Y', strtotime($date));
    }
}

if (! function_exists('enumText')) {
	function enumText($value) {
		$result = '';
		if(!empty($value)){
			$result = ucwords(str_replace("_",  " ", $value));
		}
		return $result;
	}
}

if (! function_exists('decryptPassword')) {

	function decryptPassword($encryptPassword){
		$decodePasword = "";
		if(!empty($encryptPassword)){
			$decodePasword = trim(Webwala::decode( $encryptPassword , config('constants.ENCRYPTION_KEY')));
		}
		return $decodePasword;

	}
}

if (! function_exists('createSlug')) {

	function createSlug($title) {

		// Convert all dashes/underscores into separator
		$flip = $separator = '-';

		$title = preg_replace('!['.preg_quote($flip).']+!u', $separator, $title);

		// Replace @ with the word 'at'
		$title = str_replace('@', $separator.'at'.$separator, $title);

		// Remove all characters that are not the separator, letters, numbers, or whitespace.
		$title = preg_replace('![^'.preg_quote($separator).'\pL\pN\s]+!u', '', twt_lower($title));

		// Replace all separator characters and whitespace by a single separator
		$title = preg_replace('!['.preg_quote($separator).'\s]+!u', $separator, $title);

		return $title;
	}
}

if (! function_exists('twt_lower')) {

	function twt_lower($value) {
		return mb_strtolower($value, 'UTF-8');
	}
}

if (! function_exists('detectDevice')) {

	function detectDevice(){
		$useragent= (isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '' ) ;
		$device = '';
		if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
			$device = config('constants.MOBILE_DEVICE');
		} else {
			$device = config('constants.DESKTOP_DEVICE');
		}
		return $device;
	}
}



if (! function_exists('objectToArray')) {
	function  objectToArray($value){
	
		$result  = [];
		if(!empty($value)){
			$result = json_decode(json_encode($value) , true ); 
		}
		return $result;
	}
}

if (! function_exists('sendMailSMTP')) {
	function sendMailSMTP($data){
		if (config('constants.STOP_SYSTEM_SENDING_EMAIL') != false){

			$result = [];
			$result['status'] = true;
			dd($result);
			return $result;
		}
		
		$mailResult = false;
		
		$result['status'] = false;
		$where = [];
		$where['isBackendRequest'] = true;
		$settingModel = new Setting_model();
		$settingInfo = $settingModel->getRecordDetails($where);
		
		try {
			// Setup your gmail mailer
			$transport = new Swift_SmtpTransport( ( ( isset($settingInfo->v_send_email_host) && (!empty($settingInfo->v_send_email_host)) ) ?  $settingInfo->v_send_email_host : '' )  , ( ( isset($settingInfo->i_send_email_port) && (!empty($settingInfo->i_send_email_port)) ) ?  $settingInfo->i_send_email_port :  '' ) , ( ( isset($settingInfo->v_send_email_encryption) && (!empty($settingInfo->v_send_email_encryption)) ) ?  $settingInfo->v_send_email_encryption :  null ) );
			$transport->setUsername( ( isset($settingInfo->v_send_email_user) && (!empty($settingInfo->v_send_email_user)) ) ?  $settingInfo->v_send_email_user :  '' );
			$transport->setPassword( ( isset($settingInfo->v_send_email_password) && (!empty($settingInfo->v_send_email_password)) ) ?  $settingInfo->v_send_email_password : '' );
	
			$gmail = new Swift_Mailer($transport);
			
			$data['from'] = ( ( isset($settingInfo->v_send_email_user) && (!empty($settingInfo->v_send_email_user)) ) ?  $settingInfo->v_send_email_user : '' ) ;
			$data['to'] = (isset($data['to']) && !empty($data['to']) ? $data['to'] : '');
			
			if (config('constants.SEND_EMAIL_TO_ORIGINAL_USER') != true){
				$data['to'] = (isset($settingInfo->v_contact_receive_mail) && !empty($settingInfo->v_contact_receive_mail) ? $settingInfo->v_contact_receive_mail : '');
			}
			
			$data['cc'] = (isset($settingInfo->v_default_cc_mail) && !empty($settingInfo->v_default_cc_mail) ? $settingInfo->v_default_cc_mail : '');
			
			if (empty($data['to'])){
				$result['status'] = false;
				$result['msg'] = trans('messages.error-recipient-not-found');
				return $result;
			}
			
			$data['mailTitle'] = ( ( isset($settingInfo->v_mail_title) && (!empty($settingInfo->v_mail_title)) ) ?  $settingInfo->v_mail_title :  ''  ) ;
			// Set the mailer as gmail
			
			Mail::setSwiftMailer($gmail);
			
			$data['mailData']['settingsInfo'] = $settingInfo;
			
			$result = Mail::send((!empty($data['viewName']) ? $data['viewName'] : ''), (!empty($data['mailData']) ? $data['mailData'] : []), function ($message) use ($data) {
				$message->from($data['from'], (!empty($data['mailTitle']) ? $data['mailTitle'] : null));
				
				$message->to($data['to']);
				
				if(isset($data['cc']) && !empty($data['cc'])){
					$message->cc($data['cc']);
				}
				
				if(isset($data['bcc']) && !empty($data['bcc'])){
					$message->bcc($data['bcc']);
				}
				
				$message->subject($data['subject']);
				
				if (!empty($data['mail_content'])) {
					$message->setBody($data['mail_content'], 'text/html');
				}
				
				if (!empty($data['attachment'])) {
					$data['attachment'] = json_decode($data['attachment'], true);
					if (!empty($data['attachment'])) {
						foreach ($data['attachment'] as $attchment) {
							$message->attach(public_path($attchment));
							//unlink(public_path($attchment));
						}
					}
				}
				
			});
			
			$mailResult = true;
		} catch (\Exception $e) {
			$mailResult = false;
			Log::error($e->getMessage());
			$result['error'] = $e->getMessage();
		}
		
		if ($mailResult != false) {
			$result['status'] = true;
		} else {
			$result['status'] = false;
		}
		//$result['status'] = true;
		return $result;
	}
}

if (! function_exists('generateOTP')) {

	function generateOTP($length = 6) {

		$characters = '0123456789';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}

		return $randomString;

	}
}

if (! function_exists('last_query')) {
	function last_query(){
		echo My_model::last_query();
	}
}

if (! function_exists('checkHostHeadeInjection')) {
	function checkHostHeadeInjection(){
		if(isset($_SERVER) && (!empty($_SERVER['HTTP_HOST'])) ){
			$serverHost = strtolower( $_SERVER['HTTP_HOST'] );
			$referencePageUrl = ( isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : "" ) ;
			if(!empty($referencePageUrl)){
				$pieces = parse_url($referencePageUrl);
				$domain = isset($pieces['host']) ? $pieces['host'] : $pieces['path'];
				$domain = strtolower($domain);
				$domain = str_replace("www.", "", $domain);
				$serverHost = str_replace("www.", "", $serverHost);
				if( $domain != $serverHost ){
					if( config('constants.HOST_HEADER_INJECTION') != false ){
						abort(403, trans('messages.blocked-request-msg'));
					}
				}
			}
		}
	}
}

if (! function_exists('requestPage')) {

	function requestPage()
	{
		return $_SERVER['HTTP_REFERER'];
	}
}

if (! function_exists('decimalAmount')) {
	function  decimalAmount($value){

		$result = 0;
		if(!empty($value)){
			$value = floatval($value);
			//var_dump($value);
			//$result = $value;
			//$value = round($value,2);
			//$result = number_format(  $value , 0 , "." , "," );
			$fmt = new \NumberFormatter($locale = 'en_US', NumberFormatter::DECIMAL);
			$result = $fmt->format($value);
		} else {
			$result = 0.00;
		}

		return $result;
	}
}

if (! function_exists('unlinkUploadedFile')) {
	function unlinkUploadedFile($filename){
		if (!empty($filename) && uploadedFileExists($filename)){
			unlink(config('constants.FILE_STORAGE_PATH') . config('constants.UPLOAD_FOLDER') . $filename);
		}
	}
}

if( !function_exists('uploadedFileExists') ){
	function uploadedFileExists($fileName){
		if( !empty($fileName) ){
			return file_exists ( config('constants.FILE_STORAGE_PATH') . config('constants.UPLOAD_FOLDER') . $fileName );
		}
		return false;
	}
}

if (!function_exists('getUploadedAssetUrl')) {
	function getUploadedAssetUrl($asset = null)
	{
		$data = '';
		if (!empty($asset) && uploadedFileExists($asset)) {
			$data = config('constants.FILE_STORAGE_PATH_URL') . config('constants.UPLOAD_FOLDER') . $asset;
		}
		return $data;
	}
}

if (!function_exists('apiResponse')) {
	function apiResponse($statusCode, $messages, $data = [])
	{
		$response = [];
    	$response['status_code'] = $statusCode;
    	$response['message'] = $messages;
    	if(!empty($data)){
    		$response['data'] = $data;
    	}
    	return response()->json($response, $statusCode)->header('Content-Type', 'application/json');
	}
}

if (!function_exists('removeDbPrefix')) {
	function removeDbPrefix($details){
	
		$result = [];
		if( !empty($details) ){
			foreach ( $details as $key => $value ){
				if( !is_string($key) && is_array($value) && !empty($value) ){
					$result[] = removeDbPrefix($value);
				} else if(is_string($key)) {
					$newKey = explode('_', $key);
					array_shift($newKey);
					$result[implode("_", $newKey)] = $value;
				}
			}
		}
		return $result;
	
	}
}

if (!function_exists('getStatusDetails')){
	function getStatusDetails(){
		$data = [];
		$data[config('constants.ENABLE_STATUS')] = trans('messages.enable');
		$data[config('constants.DISABLE_STATUS')] = trans('messages.disable');
		return $data;
	}
}

if (!function_exists('getDefaultMigrationColumns')){
	function getDefaultMigrationColumns($table, $callback){
		if(!empty($table)){
			$table->increments('i_id');
			$callback($table);
			$table->tinyInteger('t_is_active')->default(config('constants.ACTIVE_STATUS'));
			$table->tinyInteger('t_is_deleted')->default(config('constants.INACTIVE_STATUS'));
			$table->integer('i_created_id');
			$table->dateTime('dt_created_at');
			$table->integer('i_updated_id')->nullable();
			$table->dateTime('dt_updated_at')->nullable();
			$table->integer('i_deleted_id')->nullable();
			$table->dateTime('dt_deleted_at')->nullable();
			$table->ipAddress('v_ip')->nullable();
		}
	}
}

if (!function_exists('checkNotEmptyString')){
	function checkNotEmptyString($string){
		return strlen(trim($string)) > 0 ? true : false;
	}
}
?>