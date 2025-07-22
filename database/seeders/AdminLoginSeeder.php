<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

class AdminLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(config('constants.LOGIN_TABLE'))->insert([
            'v_name' => 'Admin',
            'v_email' => 'info@urlwebwala.com',
            'v_role' => config('constants.ROLE_ADMIN'),
            'v_mobile' => '9999999999',
            'v_password' => password_hash('admin', PASSWORD_DEFAULT),
            'i_created_id' => '1',
            'dt_created_at' => date('Y-m-d H:i:s'),
            'v_ip' => Request::ip(),
    	]);
    }
}
