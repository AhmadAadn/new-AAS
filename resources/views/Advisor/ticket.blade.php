@extends('main')
@section('title','Ticket')
@section('adi con')

<h2>Tickets</h2>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Ticket Content</th>
					<th>Date</th>
					<th>State</th>
					<th>Type</th>
				</tr>
			</thead>
			<tbody>
				@if($ticket->count() == 0 )

				<H1>No Tickets yet!! </H1>
				@else
					@foreach($ticket as $tickets)
					<tr>
						
					<td>{{$tickets->id}}</td>
					<td>{{$tickets->content}}</td>
					<td>{{$tickets->created_at}}</td>
					<td>{{$tickets->state}}</td>
					<td>{{$tickets->type}}</td>
					
					<td>		
						<button class="btn btn-primary bg-danger" onclick="document.getElementById('reply').style.display='block'">
						Reply!</button>
			
					<div id="reply" class="modal">
			
						<form method="POST" class="modal-content animate" action="{{url('/reply'.$tickets->id)}}" enctype="multipart/form-data">
							@csrf
			
							<div class="imgcontainer">
								<span onclick="document.getElementById('reply').style.display='none'" class="close" title="Close PopUp">&times;</span>
								<h1 style="text-align:center">Reply To Ticket</h1>
							</div>
								<textarea id="w3mission" name="content" rows="4" cols="130" required>
			
							</textarea>
							<input class="btn btn-lg btn-primary btn-block" type="submit">
						</form></td>
			 		</tr>
					@endforeach
					@endif
				
			</tbody>

		</table>
		
  


  @endsection