@extends('main')
@section('title','Ticket')
@section('adi con')

<h2>Tickets</h2>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Student Name</th>
					<th>Ticket Content</th>
					<th>Date</th>
					<th>State</th>
					<th>Type</th>
				</tr>
			</thead>
			<tbody>
			
					@foreach($ticket as $tickets)
					@foreach($user as $users)
					<tr>
					<td>{{$tickets->id}}</td>
					<td>{{$users->name}}</td>
					<td>{{$tickets->content}}</td>
					<td>{{$tickets->created_at}}</td>
					<td>{{$tickets->state}}</td>
					<td>{{$tickets->type}}</td>
					
					<td>		
					<button class="btn btn-primary bg-danger" onclick="document.getElementById('reply{{$tickets->id}}').style.display='block'">
						Reply! {{$tickets->id}}</button>
			
					<div id="reply{{$tickets->id}}" class="modal">
						
						<form method="POST" class="modal-content animate" action="{{url('/reply'.$tickets->id)}}" enctype="multipart/form-data">
							@csrf
							<div class="imgcontainer">
								<span onclick="document.getElementById('reply{{$tickets->id}}').style.display='none'" class="close" title="Close PopUp">&times;</span>
								<h1 style="text-align:center">Reply To Ticket</h1>
							</div>
								<textarea id="w3mission" name="rep" rows="4" cols="130" required>
			 
							</textarea>
							<input class="btn btn-lg btn-primary btn-block" type="submit">
						</form></td>
			 		</tr>
					@endforeach
					@endforeach
				
				
			</tbody>

		</table>
		
  


  @endsection