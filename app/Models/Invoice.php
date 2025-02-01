<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'client_name',
        'contact_person',
        'email',
        'phone',
        'address',
        'project_title',
        'project_description',
        'milestone_name',
        'milestone_date',
        'milestone_amount',
        'discount_name',
        'discount_amount',
        'bank_name',
        'bank_account_number',
        'bank_account_holder',
        'terms_conditions',
    ];

    protected $casts = [
        'milestone_name' => 'array',  
        'milestone_date' => 'array',  
        'milestone_amount' => 'array',
    ];
}
