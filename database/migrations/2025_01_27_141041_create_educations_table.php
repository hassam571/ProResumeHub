<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');

            $table->string('degree_name');
            $table->string('institute_name');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->boolean('ongoing')->default(false);
            $table->string('field_of_study')->nullable();
            $table->string('grade')->nullable();
            $table->string('location')->nullable();
            $table->text('description')->nullable();
            $table->text('certifications')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('educations');
    }
};
