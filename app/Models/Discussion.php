<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discussion extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function course_questions(){
        return $this->belongsTo(CourseQuestion::class, 'question_id');
    }

    // public function course_questions(){
    //     return $this->hasMany(CourseQuestion::class, 'course_question_id', 'id');
    // }

}
