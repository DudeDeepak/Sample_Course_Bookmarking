<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookmarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	if (!Schema::hasTable('bookmarks')) {
        Schema::create('bookmarks', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('course_id', 191);
            $table->string('course_name', 191);
            $table->string('course_type', 191);
            $table->timestamps();
        });
	}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookmarks');
    }
}
