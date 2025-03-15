<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('skill_name');
            $table->string('skill_category');
            $table->string('skill_subcategory');
            $table->string('proficiency_level');
            $table->integer('years_experience')->nullable();
            $table->text('skill_icon')->nullable();
            $table->text('related_tools')->nullable();
            $table->string('organization_name')->nullable();
            $table->string('job_title')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('key_achievements')->nullable();
            $table->string('location')->nullable();
            $table->text('notable_projects')->nullable();
            $table->text('publications')->nullable();
            $table->text('certifications')->nullable();
            $table->string('certification_documents')->nullable();
            $table->text('additional_comments')->nullable();
            $table->text('skill_description')->nullable();
            $table->string('ratings')->nullable();
            $table->string('languages')->nullable();
            $table->text('unique_contributions')->nullable();
            $table->text('testimonials')->nullable();
            $table->string('status')->default('0');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('skills');
    }
};
