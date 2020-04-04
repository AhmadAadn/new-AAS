<?php

namespace App\Http\Controllers;
use App\Student;
use App\feedback;
use App\ticket;
use Illuminate\Http\Request;

class feedbackController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function stor(Request $request){
       
        $stu = Student::where('user_id', auth()->user()->id)->first();
        if ($ticket = Ticket::find($request->id)) {
            
            $t = $ticket->type;
        }
        $feedback = new Feedback();
        $feedback->content = $request->content;
        $feedback->type = $t;
        $feedback->ticket_id = $request->id;
        $feedback->students_id = $stu->id;
        $feedback->advi_id = $stu->Advisor_id;
        $feedback->save();
        redirect('/ticket');
        
    }
}
