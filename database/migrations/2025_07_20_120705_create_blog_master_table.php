<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('constants.BLOG_TABLE'), function (Blueprint $table) {
            getDefaultMigrationColumns($table, function ($table) {
                $table->string('v_title')->nullable();
                $table->string('v_content')->nullable();
                $table->string('v_image')->nullable();
                $table->string('v_author_name')->nullable();
                $table->string('v_seo_url')->nullable();
                $table->integer('i_category_id')->nullable();
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
        Schema::dropIfExists(config('constants.BLOG_TABLE'));
    }
}
