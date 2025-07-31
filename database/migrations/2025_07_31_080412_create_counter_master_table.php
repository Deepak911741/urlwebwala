<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounterMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('constants.COUNTER_MASTER_TABLE'), function (Blueprint $table) {
            getDefaultMigrationColumns($table, function ($table){
    			$table->integer('i_visited_count');
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
        Schema::dropIfExists(config('constants.COUNTER_MASTER_TABLE'));
    }
}
