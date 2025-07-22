<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('constants.CLIENT_TABLE'), function (Blueprint $table) {
            getDefaultMigrationColumns($table, function ($table) {
                $table->string('v_client_name', 255)->nullable();
                $table->string('v_image', 255)->nullable();
                $table->string('v_weburl')->nullable();
                $table->string('v_email')->nullable();
                $table->string('v_phone')->nullable();
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
        Schema::dropIfExists(config('constants.CLIENT_TABLE'));
    }
}
