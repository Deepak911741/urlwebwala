<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestinomialMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('constants.TESTINOMIAL_TABLE'), function (Blueprint $table) {
            getDefaultMigrationColumns($table, function($table){
                $table->string('v_image')->nullable();
                $table->string('v_client_name')->nullable();
                $table->string('v_rating')->nullable();
                $table->string('v_designation')->nullable();
                $table->string('v_states')->nullable();
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
        Schema::dropIfExists(config('constants.TESTINOMIAL_TABLE'));
    }
}
