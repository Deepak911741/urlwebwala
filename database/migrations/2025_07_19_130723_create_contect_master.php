<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContectMaster extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('constants.CONTACT_MASTER'), function (Blueprint $table) {
           getDefaultMigrationColumns($table, function ($table) {
                $table->text('v_firstname')->nullable();
                $table->text('v_lastname')->nullable();
                $table->text('v_email')->nullable();
                $table->text('v_mobile')->nullable();
                $table->text('i_service_id')->nullable();
                $table->longText('v_message')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('constants.CONTACT_MASTER'));
    }
}
