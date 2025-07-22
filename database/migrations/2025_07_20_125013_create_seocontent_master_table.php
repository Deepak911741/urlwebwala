<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeocontentMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('constants.SEOCONTENT_TABLE'), function (Blueprint $table) {
            getDefaultMigrationColumns($table, function ($table) {
                $table->string('v_title')->nullable();
                $table->string('v_page_title')->nullable();
                $table->string('v_pagename')->nullable();
                $table->string('v_description')->nullable();
                $table->string('v_keywords')->nullable();
                $table->string('v_author')->nullable();
                $table->string('v_canonical_url')->nullable();
                $table->string('v_seo_url')->nullable();
                $table->string('v_robots')->nullable();
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
        Schema::dropIfExists(config('constants.SEOCONTENT_TABLE'));
    }
}
