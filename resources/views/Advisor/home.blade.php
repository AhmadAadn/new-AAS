@extends('main')
@section('title','Home')
@section('adi con')

	
<table class="table table-hover">
  <thead>
    <tr>
      <th>Student ID</th>
      <th>Student Name</th>
      <th>Departemnt</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($student as $students)
    @foreach($user as $users)
					<tr>	
					<td>{{$students->Eid}}</td>
					<td>{{$users->name}}</td>
          <td>{{$students->dep}}</td>
          </tr>
					@endforeach
					@endforeach
				
  </tbody>

</table>

		
  


  @endsection