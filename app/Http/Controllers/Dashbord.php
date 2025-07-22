<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashbord extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->folderName = config('constants.ADMIN_FOLDER');
    }

}
