<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'project_name',
        'project_type',
        'client_name',
        'project_description',
        'project_images',
        'project_videos', 
        'project_documents',
        'live_link',
        'duration',
        'project_cost',
        'technologies_used',
        'challenges_solutions',
        'key_features',
        'team_members',
        'status',
    ];
    

    // Cast JSON fields
    protected $casts = [
        'project_images' => 'array',
        'project_documents' => 'array',
    ];
  
}
