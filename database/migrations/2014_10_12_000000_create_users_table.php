<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('thumb');
            $table->string('firstName', 40);
            $table->string('lastName', 50);
            $table->string('description', 300);
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};