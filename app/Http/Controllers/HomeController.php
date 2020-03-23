<?php

namespace App\Http\Controllers;
use App\Role;
use Illuminate\Http\Request;
use App\Advisor;
use App\Student;
use App\Subject;
use App\User;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    public function index()
    {
       /* $stu = Student::where('user_id', auth()->user()->id)->first();
        $sub = Subject::where('students_id', $stu->id)->get();
*/
        return view('student/home');//with('subject', $sub);
    }
   

   
}
/*<tbody>
<!--@foreach($subject as $subjects)
   <tr>
     
   <td>{{$subjects->id}}</td>
   <td>{{$subjects->content}}</td>
   <td>{{$subjects->created_at}}</td>
   <td>{{$subjects->state}}</td>
   <td>{{$subjects->type}}</td>
       </tr>
       @endforeach--> 
   </tbody>*/