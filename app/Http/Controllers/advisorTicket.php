<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advisor;
use App\Student;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Ticket;
use App\Http\Controllers\Auth;

class advisorTicket extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //لازم اضيف اسم الطالب في قواعد البيانات بعد ما انتهي من كل شي 

    public function index()
    {
        $adi = Advisor::where('user_id', auth()->user()->id)->first();
        $ti = Ticket::where('advi_id', $adi->id)->get();

        $stu = Student::where('Advisor_id', $adi->id)->first(); //هذا غلط
        $user = User::where('id', $stu->user_id)->get();

        $arr = array('ticket' => $ti, 'user' => $user);
        return view('Advisor/ticket', $arr);
    }
    
    public function saveReply(Request $request , $id)
    {
        $adi = Advisor::where('user_id', auth()->user()->id)->first();
        DB::table('tickets')
            ->where('id', $id)
            ->update(['reply' => $request->rep]);
        return back();

    }
}
