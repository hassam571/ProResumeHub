<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'contract_title',
        'contract_purpose',
        'client_name',
        'client_email',
        'client_phone',
        'client_address',
        'start_date',
        'end_date',
        'milestone_name',
        'milestone_desc',
        'milestone_date',
        'milestone_amount',
                'project_timeline',
        'payment_terms',
        'revisions',
        'ownership',
        'confidentiality',
        'client_responsibilities',
        'termination_clause',
        'dispute_resolution',
        'limitation_liability',
        'amendments',
    ];
    

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'milestone_name' => 'array',
        'milestone_desc' => 'array',
        'milestone_date' => 'array',
        'milestone_amount' => 'array',
        // Automatically decode/encode JSON for milestones
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}
