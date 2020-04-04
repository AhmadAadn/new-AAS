<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advisor;
use App\Student;
use App\User;

use App\Http\Controllers\Auth;

class advisorHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //لازم اضيف اسم الطالب في قواعد البيانات بعد ما انتهي من كل شي 
    public function index()
    {
        $adi = Advisor::where('user_id', auth()->user()->id)->first();
        $stu = Student::where('Advisor_id', $adi->id)->first();
        $user = User::where('id', $stu->user_id)->get();
       
        $arr = Array('student'=>$stu , 'user'=>$user);
        
        return view('Advisor/home', $arr);
    }
}
