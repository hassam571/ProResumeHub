<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

   protected $table='educations';
    protected $fillable = [
        'user_id',
        'degree_name',
        'institute_name',
        'start_date',
        'end_date',
        'ongoing',
        'field_of_study',
        'grade',
        'location',
        'description',
        'certifications',
    ];



    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
    
}
