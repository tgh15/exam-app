<?php

namespace App\Http\Controllers;

use App\Models\CoursesPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CoursePackageController extends Controller
{
    public function addCourse(Request $request){
        $validate = $request->validate([
            'course_id' => 'required',
            'package_id' => 'required'
        ]);
        
        DB::beginTransaction();

        try {
            CoursesPackage::create($validate);
            DB::commit();

            return redirect()->route('dashboard.packages.show', $request->package_id);
        }catch(\Exception $e){
            DB::rollBack();
            $error = ValidationException::withMessages([
                'system_error' => ['System error: '.$e->getMessage(),]
            ]);
            throw $error;
        }
    }
}
