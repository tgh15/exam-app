<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\ExamSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Course $course){
        $exam_sessions = ExamSession::where('user_id', Auth::user()->id)->where('course_id', $course->id)->get();
        // return response()->json($exam_sessions);
        return view('student.courses.history.index', [
            'exam_sessions' => $exam_sessions
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Course $course, ExamSession $examSession)
    {
        $user = Auth::user();

        $isEnrolled = $user->courses()->where('course_id', $course->id)->exists();

        if(!$isEnrolled){
            abort(404);
        }

        $nullAnswer = 0;
        
        // $exam_session = $user->exam_sessions()->where('id', $examSession->id)->with('student_answer.question.answers')->first();
        $exam_session = ExamSession::where('id', $examSession->id)->with('student_answer')->first();
        $questions = $course->questions()->with('answers')->get();
        foreach($questions as $index => $question){
            if(!isset( $exam_session['student_answer'][$index])){
               $question['student_answer'] = null;
               $nullAnswer++;
            }else if($question['id'] ==  $exam_session['student_answer'][$index]['course_question_id']){
                $question['student_answer'] = $exam_session['student_answer'][$index]['answer_id'];
            }
        }
        // dd($exam_session->student_answer);
        // return response()->json($questions);
        return view('student.courses.history.show', [
            'course' => $questions,
            'course_name' => $course->name,
            'course_id' => $course->id,
            'exam_session' => $exam_session,
            'null_answer' => $nullAnswer 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExamSession $examSession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExamSession $examSession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExamSession $examSession)
    {
        //
    }
}
