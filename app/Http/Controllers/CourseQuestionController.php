<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CourseQuestionController extends Controller
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
    public function create(Course $course)
    {

        return view('admin.questions.create', [
            'course' => $course
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Course $course)
    {
        //
        $validate = $request->validate([
            'question' => 'required|string',
            'answers' => 'required|array',
            'question_type' => 'required|string',
            'answers.*' => 'required|string',
            'discussion' => 'required|string',
            'correct_answer' => 'required|integer'
        ]);
        
        DB::beginTransaction();

        try {
            $question = $course->questions()->create([
                'question' => $validate['question'],
                'discussion' => $validate['discussion'],
                'question_type' => $validate['question_type']
            ]);

            foreach($request->answers as $index => $answerText){
                $isCorrect = ($request->correct_answer == $index);
                $question->answers()->create([
                    'answer' => $answerText,
                    'is_correct' => $isCorrect
                ]);
            }

            DB::commit();

            return redirect()->route('dashboard.courses.show', $course->id);
        }catch(\Exception $e){
            DB::rollBack();
            $error = ValidationException::withMessages([
                'system_error' => ['System error: '.$e->getMessage(),]
            ]);
            throw $error;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CourseQuestion $courseQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CourseQuestion $courseQuestion)
    {
        //
        $course = $courseQuestion->course;
        // return response()->json($courseQuestion);
        return view('admin.questions.edit', [
            'courseQuestion' => $courseQuestion,
            'course' => $course
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CourseQuestion $courseQuestion)
    {
        //
        // return response()->json($request);
        $validate = $request->validate([
            'question' => 'required|string',
            'answers' => 'required|array',
            'question_type' => 'required|string',
            'discussion' => 'required|string',
            'answers.*' => 'required|string',
            'correct_answer' => 'required|integer'
        ]);
        
        DB::beginTransaction();

        try {
            
            $courseQuestion->update([
                'question' => $validate['question'],
                'discussion' => $validate['discussion'],
                'question_type' => $validate['question_type']
            ]);

            $courseQuestion->answers()->delete();

            foreach($request->answers as $index => $answerText){
                $isCorrect = ($request->correct_answer == $index);
                $courseQuestion->answers()->create([
                    'answer' => $answerText,
                    'is_correct' =>  $isCorrect
                ]);
            }

            DB::commit();

            return redirect()->route('dashboard.courses.show', $courseQuestion->course_id);
        }catch(\Exception $e){
            DB::rollBack();
            $error = ValidationException::withMessages([
                'system_error' => ['System error: '.$e->getMessage(),]
            ]);
            throw $error;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CourseQuestion $courseQuestion)
    {
        
        try{
            $courseQuestion->delete();
            return redirect()->route('dashboard.courses.show', $courseQuestion->course_id);
        }catch(\Exception $e){
            DB::rollBack();
            $error = ValidationException::withMessages([
                'system_error' => ['System error!' . $e->getMessage()]
            ]);
            throw $error;
        }
    }
}
