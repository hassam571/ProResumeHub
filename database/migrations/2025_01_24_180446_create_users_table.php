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
            $table->string('username')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('User');
            $table->string('fiverr_link')->nullable();
            $table->string('upwork_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('other_platform')->nullable();
            $table->string('dp_path')->nullable();
            $table->integer('age')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other'])->nullable();
            $table->enum('marital_status', ['Single', 'Married', 'Divorced', 'Widowed'])->nullable();
            $table->string('is_active')->nullable();
            $table->rememberToken(); // Adds the remember_token column

            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
