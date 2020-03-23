@extends('main')
@section('title','Home')
@section('adi con')

	
<table class="table table-hover">
  <thead>
    <tr>
      <th>Student ID</th>
      <th>Student Name</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($student as $students)
					<tr>	
					<td>{{$students->Eid}}</td>
          <td>{{$students->dep}}</td>
          </tr>
					@endforeach
				
  </tbody>

</table>

		
  


  @endsection