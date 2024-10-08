<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExamSession extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function student_answer(){
        return $this->hasMany(StudentAnswer::class, 'exam_session_id', 'id');
    }

    // public function course_questions(){
    //     return $this->hasMany(CourseQuestion::class, 'course_question_id', 'id');
    // }

}
