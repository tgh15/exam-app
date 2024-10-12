<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseQuestion;
use App\Models\ExamSession;
use App\Models\StudentAnswer;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LearningController extends Controller
{
    public function index() {
        $user = Auth::user();
        $my_courses = $user->courses()->with('exam_sessions')->with('category')->get();
        // $exam = ExamSession::where('user_id', $user->id)->get();
        $exam = $user->exam_sessions()->with('student_answer')->first();
        // return response()->json($my_courses);

        // foreach($my_courses as $course){
        //     $totoalQuestionCount = $course->questions()->count();
        //     $answeredQuestinsCount = StudentAnswer::where('user_id', $user->id)
        //         ->whereHas('question', function($query) use ($course){
        //             $query->where('course_id', $course->id);
        //         })->distinct()->count('course_question_id');
            
        //     if($answeredQuestinsCount < $totoalQuestionCount){
        //         $firstUnansweredQuestion = CourseQuestion::where('course_id', $course->id)
        //             ->whereNotIn('id', function($query) use ($user){
        //                 $query->select('course_question_id')->from('student_answers')
        //                 ->where('user_id', $user->id);
        //             })->orderBy('id', 'ASC')->first();

        //         $course->nextQuestionId = $firstUnansweredQuestion ? $firstUnansweredQuestion->id : null;
        //     } else {
        //         $course->nextQuestionId = null;
        //     }
        // }
        return view("student.courses.index",[
            'my_courses' => $my_courses
        ]);
    }

    public function learning(Course $course){
        $user = Auth::user();

        $isEnrolled = $user->courses()->where('course_id', $course->id)->exists();

        if(!$isEnrolled){
            abort(404);
        }
        // dd($course->questions()->with('answers')->get());

        // $currentQuestion = CourseQuestion::where('course_id', $course->id)->where('id', $question)->firstOrFail();
        // $exan_session = ExamSession::create([
        //     'score' => 0,
        //     'user_id' => Auth::id(),
        //     'course_id' => $course->id
        // ]);
        $questions = $course->questions()->with('answers')->get();
        foreach($questions as $question){
            unset($question->discussion);
            unset($question->deleted_at);
            unset($question->updated_at);
            unset($question->created_at);
            foreach($question->answers as $answer){
                unset($answer->is_correct);
                unset($answer->deleted_at);
                unset($answer->updated_at);
                unset($answer->created_at);
            }
        }
        $start_time = time();
        // return response()->json(Cookie::get('start_time'));
        return response(view('student.courses.learning', [
            'course' => $questions,
            'course_name' => $course->name,
            'course_id' => $course->id,
            'duration' => $course->working_duration,
            'start_time' => $start_time
        ]));
    }
    
    public function confirmation(Course $course){
        // return response()->json($course);
        return view('student.courses.confirmation', [
            'question_length' => count($course->questions()->get()),
            'course_name' => $course->name,
            'working_duration' => $course->working_duration,
            'course_id' => $course->id
        ]);
        
    }

    public function submit(Request $request, Course $course){
        return response()->json($request);
    }
    
    
}
