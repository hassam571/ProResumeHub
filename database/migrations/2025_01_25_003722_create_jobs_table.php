<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->integer('user_id')->nullable(); // User ID
            $table->string('job_title'); // Job Title
            $table->string('organization_name'); // Organization Name
            $table->string('employment_type'); // Employment Type
            $table->date('start_date'); // Start Date
            $table->date('end_date')->nullable(); // End Date (nullable for ongoing jobs)
            $table->string('location')->nullable(); // Location
            $table->text('key_achievements')->nullable(); // Key Achievements/Responsibilities
            $table->text('notable_projects')->nullable(); // Notable Projects
            $table->text('tools_used')->nullable(); // Tools and Technologies Used
            $table->text('challenges_solutions')->nullable(); // Challenges Faced and Solutions Provided
            $table->string('skills_acquired')->nullable(); // Skills Acquired
            $table->string('references')->nullable(); // References/Testimonials
            $table->enum('status', ['active', 'inactive'])->default('active'); // Job Status
            $table->timestamps(); // Created At & Updated At

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job');
    }
};
