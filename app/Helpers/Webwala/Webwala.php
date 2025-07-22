<?php
namespace App\Helpers\Webwala;

class Webwala{
	
	// private key for encryption
	public $encryptionKey  ='';
	
	public function __construct(){
		$this->encryptionKey = config('constants.ENCRYPTION_KEY');
	}
	
	/**
	 * This function used to display message
	 *
	 * @param string $type
	 *            'message type'
	 * @param string $message
	 *            text'
	 */
	public static function setFlashMessage($type, $message, $convert = true)
	{
		$output = '<div class="alert alert-' . $type . ' alert-dismissible text-center" role="alert">
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"></span>
							</button>' . ($convert != false ? ucwords(strtolower($message)) : $message)  . '</div>';
		session()->flash('message', $output );
	}
	
	public static function readMessage()
	{
		if (session()->has('message')){
			echo session()->get('message');
		}
		
	}
	
	/**
	 * This function used to encode input text
	 *
	 * encode input value
	 *
	 * @param string $plainText
	 *            value'
	 * @return string
	 */
	public static function encode($plainText , $key = null )
	{  	
		$thisClass = new Webwala();
		if(!empty($key)){
			$thisClass->encryptionKey = $key;
		}
		if (empty($plainText)) {
			return '';
		}
		$ivlen = openssl_cipher_iv_length($cipher = "AES-128-CBC");
		$iv = openssl_random_pseudo_bytes($ivlen);
		$ciphertext_raw = openssl_encrypt($plainText, $cipher, $thisClass->encryptionKey, $options = OPENSSL_RAW_DATA, $iv);
		$hmac = hash_hmac('sha256', $ciphertext_raw, $thisClass->encryptionKey , $as_binary = true);
		$ciphertext = self::safebase64_encode($iv . $hmac . $ciphertext_raw);
		return $ciphertext;
	}
	
	/**
	 * This function used to decode input text
	 *
	 * @param string $plainText
	 *            input text'
	 * @return string
	 */
	public static function decode($plainText , $key = null )
	{
		if (empty($plainText)) {
			return '';
		}
		if(strlen($plainText) < 22 ){
			return '';
		}
		$thisClass = new Webwala();
		if(!empty($key)){
			$thisClass->encryptionKey = $key;
		}
		$c = self::safebase64_decode($plainText);
		$ivlen = openssl_cipher_iv_length($cipher = "AES-128-CBC");
		$iv = substr($c, 0, $ivlen);
		$hmac = substr($c, $ivlen, $sha2len = 32);
		$ciphertext_raw = substr($c, $ivlen + $sha2len);
		$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $thisClass->encryptionKey, $options = OPENSSL_RAW_DATA, $iv);
		$calcmac = hash_hmac('sha256', $ciphertext_raw, $thisClass->encryptionKey , $as_binary = true);
		if (hash_equals($hmac, $calcmac)) // PHP 5.6+ timing attack safe comparison
		{
			return $original_plaintext . "\n";
		}
	}
	
	/**
	 * safe64_encode value
	 *
	 * @param string $val
	 * @return string
	 */
	public static function safebase64_encode($val)
	{
		// return strtr ( base64_encode ( $val ), '+/=', '-_ ' );
		return rtrim(strtr(base64_encode($val), '+/', '-_'), '=');
	}
	
	/**
	 * safe64_decode value
	 *
	 * @param string $val
	 * @return string
	 */
	public static function safebase64_decode($val)
	{
		// return base64_decode ( strtr ( $val, '-_ ', '+/=' ) );
		return base64_decode(str_pad(strtr($val, '-_', '+/'), strlen($val) % 4, '=', STR_PAD_RIGHT));
	}
}

