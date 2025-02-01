<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();

            // Fields from the form
            $table->string('project_name')->nullable();
            $table->string('project_type')->nullable();
            $table->string('client_name')->nullable();
            $table->text('project_description')->nullable();
            $table->json('project_images')->nullable(); 
            $table->text('project_videos')->nullable(); 
            $table->json('project_documents')->nullable(); 
            $table->string('live_link')->nullable();
            $table->unsignedInteger('duration')->nullable();
            $table->decimal('project_cost', 10, 2)->nullable();
            $table->text('technologies_used')->nullable();
            $table->text('challenges_solutions')->nullable();
            $table->text('key_features')->nullable();
            $table->text('team_members')->nullable();

            $table->enum('status', ['active', 'inactive', 'completed'])->default('active');

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
        Schema::dropIfExists('projects');
    }
}
