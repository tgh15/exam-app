<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        $packages = Package::all();
        return view('landing', [
            'packages' => $packages
        ]);
    }
}
