<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('user_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('blog', 200); // Maximum length of 200 characters
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_blogs');
    }
}
