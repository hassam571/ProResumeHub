<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');

            $table->string('contract_title')->nullable();
            $table->text('contract_purpose')->nullable();
            $table->string('client_name')->nullable();
            $table->string('client_email')->nullable();
            $table->string('client_phone')->nullable();
            $table->text('client_address')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->json('milestone_name')->nullable();  
            $table->json('milestone_desc')->nullable();  
            $table->json('milestone_date')->nullable();  
            $table->json('milestone_amount')->nullable();
            
            $table->text('project_timeline')->nullable();
            $table->text('payment_terms')->nullable();
            
            $table->text('revisions')->nullable(); 
            $table->text('ownership')->nullable(); 
            $table->text('confidentiality')->nullable();
            $table->text('client_responsibilities')->nullable(); 
            $table->text('termination_clause')->nullable(); 

            $table->text('dispute_resolution')->nullable();
            $table->text('limitation_liability')->nullable(); 
            $table->text('amendments')->nullable(); 
            $table->text('signature')->nullable(); 

            
            
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
        Schema::dropIfExists('contracts');
    }
}
