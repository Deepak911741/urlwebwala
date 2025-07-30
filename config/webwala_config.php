<?php

$webwalaConfig = [];

// $sslConnection = is_ssl();
$baseUrl = 'http://';
// if( $sslConnection != false ){
// 	$baseUrl = 'https://';
// }
$webwalaConfig['FRONTEND_URL'] = $baseUrl . (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] . '/' : '');

$baseUrl .= (isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'].'/urlwebwala/' : '');

$webwalaConfig['SITE_URL'] = $baseUrl;

// meta tags
$webwalaConfig['SITE_TITLE'] = "URL Webwala";

// developer settings
$webwalaConfig['SHOW_DEVELOPER_SETTINGS'] = 0;

//Encryption key  - It has to be in Capital letter
$webwalaConfig['ENCRYPTION_KEY'] = "LARAVEL_STARTER";

$webwalaConfig['DISPLAY_DATE_FORMAT'] = "d-m-Y";
$webwalaConfig['DISPLAY_DATE_TIME_FORMAT'] = "d-m-Y h:i:s A";
$webwalaConfig['DEFAULT_DATE_FORMAT'] = "DD-MM-YYYY";


$webwalaConfig['LOGIN_COOKIE_NAME'] = $webwalaConfig['ENCRYPTION_KEY'];
$webwalaConfig['OTP_LENGTH'] = 6;
$webwalaConfig['SEND_LOGIN_OTP'] = 0;
$webwalaConfig['SEND_STATIC_OTP'] = 1;
$webwalaConfig['STATIC_OTP_VALUE'] = '123456';

$webwalaConfig['MOBILE_DEVICE'] = "mobile";
$webwalaConfig['DESKTOP_DEVICE'] = "desktop";

$webwalaConfig['CHECK_OLD_PASSWORD'] = 1;
$webwalaConfig['CHECK_PASSWORD_REGEX'] = 0;
$webwalaConfig['FORGET_PASSWORD_CHECK_TIME'] = 30; //30 minutes
$webwalaConfig['REMEMBER_ME_TIME'] = 1440; // ( 1440 mins ) (24 hrs) 
$webwalaConfig['SHOW_FORGOT_PASSWORD_LINK'] = 1;
$webwalaConfig['LISTING_SEQUENCE'] = 'id';
$webwalaConfig['DEFAULT_ADMIN_EMAIL'] = [ 'info@urlwebwala.com' ];
$webwalaConfig['SHOW_CONFIRM_BOX'] = true;
$webwalaConfig['SHOW_REMEMBER_ME_CHECKBOX'] = false;

$webwalaConfig['ONLY_ADMIN_PANEL'] = true;

//if you want to see error make it true ( false for production and true for local )
$webwalaConfig['SHOW_ERROR_EXCEPTION'] = true;
$webwalaConfig['ERROR_EXCEPTION_TICKET_PREFIX'] = 'TCKT-';

$webwalaConfig['DATABASE_USER'] = "root";
$webwalaConfig['DATABASE_PASSWORD'] = "";
$webwalaConfig['DATABASE_NAME'] = "urlwebwala";

$webwalaConfig['HOST_HEADER_INJECTION'] = false;
$webwalaConfig['SEND_EMAIL_TO_ORIGINAL_USER'] = true;
$webwalaConfig['SYSTEM_ENVIRONMENT'] = 'local'; // 1) local  2) production

$webwalaConfig['BACKEND_ROUTE_SLUG'] = 'admin/';
$webwalaConfig['BACKEND_SITE_URL'] = $baseUrl . $webwalaConfig['BACKEND_ROUTE_SLUG'];

$webwalaConfig['IS_FRONTEND_REACT'] = false;
$webwalaConfig['LOGIN_OTP_EXPIRE_TIME'] = 5; //Enter this value in minutes
$webwalaConfig['LOGIN_RESEND_OTP_TIME'] = 5; //Enter this value in seconds
$webwalaConfig['STOP_SYSTEM_SENDING_EMAIL'] = false;
$webwalaConfig['RESEND_OTP_TIMER_KEY'] = "resend-otp-time";