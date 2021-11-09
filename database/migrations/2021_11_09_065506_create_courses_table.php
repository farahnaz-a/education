<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('thumbnail_image');
            $table->longText('short_description');
            $table->string('category_id');
            $table->string('user_id');
            $table->longText('course_overview');
            $table->string('intro_video')->nullable();
            $table->string('price');
            $table->string('language');
            $table->string('level')->nullable();
            $table->string('duration')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
