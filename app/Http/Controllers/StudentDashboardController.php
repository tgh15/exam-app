<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentDashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        $packages = Package::all();
        $my_packages = $user->packages()->get();
        return view('student.index', [
            'my_packages' => $my_packages,
            'packages' => $packages
        ]);
    }
}
