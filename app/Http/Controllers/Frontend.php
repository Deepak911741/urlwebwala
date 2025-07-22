<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Guest
{
    public function __construct(){
		parent::__construct();
	}

    public function Home(){
		$data['pageTitle'] = trans('messages.contact-us');
		return $this->guestView($this->adminFolderName . 'home.home' , $data);
	}
}
