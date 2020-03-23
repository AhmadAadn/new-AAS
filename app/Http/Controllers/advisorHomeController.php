<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advisor;
use App\Student;
use App\Http\Controllers\Auth;

class advisorHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $adi = Advisor::where('user_id', auth()->user()->id)->first();
        $stu = Student::where('Advisor_id', $adi->id)->get();

        
        return view('Advisor/home')->with('student', $stu);
    }
}
