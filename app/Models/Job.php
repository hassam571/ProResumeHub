<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{ 
    use HasFactory;

    protected $table = 'job';

    // Fillable attributes for mass assignment
    protected $fillable = [
        'user_id',
        'job_title',
        'organization_name',
        'employment_type',
        'start_date',
        'end_date',
        'location',
        'key_achievements',
        'notable_projects',
        'tools_used',
        'challenges_solutions',
        'skills_acquired',
        'references',
        'status',
    ];
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
    
}
