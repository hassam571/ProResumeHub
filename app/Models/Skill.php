<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'skill_name',
        'skill_category',
        'skill_subcategory',
        'proficiency_level',
        'years_experience',
        'skill_icon',
        'related_tools',
        'organization_name',
        'job_title',
        'start_date',
        'end_date',
        'key_achievements',
        'location',
        'notable_projects',
        'publications',
        'certifications',
        'certification_documents',
        'additional_comments',
        'skill_description',
        'ratings',
        'languages',
        'unique_contributions',
        'testimonials',
    ];
}
