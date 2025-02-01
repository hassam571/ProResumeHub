<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('client_name');
            $table->string('contact_person')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('project_title');
            $table->text('project_description')->nullable();
            $table->json('milestone_name')->nullable();  
            $table->json('milestone_date')->nullable();  
            $table->json('milestone_amount')->nullable();
            $table->string('discount_name')->nullable();
            $table->decimal('discount_amount', 10, 2)->nullable();
            $table->string('bank_name');
            $table->string('bank_account_number');
            $table->string('bank_account_holder');
            $table->text('terms_conditions')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoices');
    }
}
