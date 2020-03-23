<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advisor;
use App\Student;
use App\User;

use App\Ticket;
use App\Http\Controllers\Auth;

class advisorTicket extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $adi = Advisor::where('user_id', auth()->user()->id)->first();
        $ti = Ticket::where('advi_id', $adi->id)->get();

        $stu = Student::where('Advisor_id', $adi->id);
        $user = User::where('id', $stu->user_id);
       
        $arr = Array('stu'=>$stu , 'ti'=>$ti);
        return view('Advisor/ticket',$arr);
    }

    public function saveReply()
    {
        
    }
}
