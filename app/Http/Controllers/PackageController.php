<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return view('admin.package.index', [
            'packages' => $packages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.package.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required',
            'price' => 'required|integer',
            'price_before' => 'required|integer'
        ]);
        
        DB::beginTransaction();

        try {
           
            Package::create($validate);

            DB::commit();

            return redirect()->route('dashboard.packages.index');
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
    public function show(Package $package)
    {
        $courses = $package->courses()->get();
        return view('admin.package.show', [
            'courses' => $courses,
            'package' => $package
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Package $package)
    {
        $courses = Course::all();
        return view('admin.package.edit', [
            'courses' => $courses,
            'package' => $package
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        //
    }
}
