<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseAnswer;
use App\Models\CourseQuestion;
use App\Models\ExamSession;
use App\Models\StudentAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class StudentAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, Course $course)
    {
        // $validate = $request->validate([
        //     'answer_id' => 'required|exists:course_answers,id'
        // ]);

        DB::beginTransaction();

        try {
            $student_answers = $request->json()->all();
            $exam_session = ExamSession::create([
                'user_id' => Auth::id(),
                'course_id' => $course->id,
                'score' => '500'
            ]);
            foreach($student_answers as $student_answer){
                $selectedAnswer = CourseAnswer::find($student_answer['answer_id']);
                $answerValue = $selectedAnswer->is_correct ? 'correct' :'wrong';

                $exam_session->student_answer()->create([
                    'user_id' => Auth::id(),
                    'course_question_id' => $student_answer['question_id'],
                    'answer_id' => $student_answer['answer_id'],
                    'answer' => $answerValue
                ]);
            }
            // $selectedAnswer = CourseAnswer::find($validate['answer_id']);
            // if ($selectedAnswer->course_question_id != $question) {
            //     $error = ValidationException::withMessages([
            //         'system_error' => ['System error!'],
            //     ]);
            //     throw $error;
            // }

            // $existingAnswer = StudentAnswer::where('user_id', Auth::id())->where('course_question_id', $question)->first();
            // if ($existingAnswer) {

            //     $error = ValidationException::withMessages([
            //         'system_error' => ['System error!' . ['Jawaban telah dijawab']],
            //     ]);
            //     throw $error;
            // }
            // $answerValue = $selectedAnswer->is_correct ? 'correct' :'wrong';
            // StudentAnswer::create([
            //     'user_id' =>Auth::id(),
            //     'course_question_id' => $question,
            //     'answer' => $answerValue
            // ]);

            DB::commit();
            
            // $nextQuestion = CourseQuestion::where('course_id', $course->id)
            //     ->where('id', '>', $question)
            //     ->orderBy('id', "ASC")->first();

            // if($nextQuestion){
            //     return redirect()->route('dashboard.learning.course', [
            //         'course' => $course->id,
            //         'question' => $nextQuestion->id
            //     ]);
            // }else{
            //     return redirect()->route('dashboard.learning.finished.course', $course->id);
            // }
            return response()->json($exam_session);

        } catch (\Exception $e) {
            DB::rollBack();
            $error = ValidationException::withMessages([
                'system_error' => ['System error!' . $e->getMessage()],
            ]);
            throw $error;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentAnswer $studentAnswer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentAnswer $studentAnswer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentAnswer $studentAnswer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentAnswer $studentAnswer)
    {
        //
    }
}
