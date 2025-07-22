<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewslatterMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('constants.NEWSLATTER_TABLE'), function (Blueprint $table) {
            getDefaultMigrationColumns($table, function ($table) {
                $table->text('v_email')->nullable();
                $table->text('v_mobile')->nullable();
                $table->text('i_service_id')->nullable();
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
        Schema::dropIfExists(config('constants.NEWSLATTER_TABLE'));
    }
}
