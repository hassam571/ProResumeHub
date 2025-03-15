<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'order_password',
        'project_name',
        'project_description',
        'milestones'
    ];

    protected $casts = [
        'milestones' => 'array'
    ];

    public function completedMilestones()
    {
        return $this->hasMany(CompletedMilestone::class);
    }
}
