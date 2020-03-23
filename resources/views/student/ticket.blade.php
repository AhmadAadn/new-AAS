@extends('main')
@section('title','Ticket')
@section('contete2')

<div>
	<div class="container">
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
					 <a href="{{url('/delete'.$tickets->id)}}" class="btn btn-primary bg-danger" role="button"
						aria-disabled="true">Delete</a></td>
					<td>		
						<button class="btn btn-primary bg-danger" onclick="document.getElementById('feedback').style.display='block'">
						New Feedback!</button>
			
					<div id="feedback" class="modal">
			
						<form method="POST" class="modal-content animate" action="{{url('/feedback'.$tickets->id)}}" enctype="multipart/form-data">
							@csrf
			
							<div class="imgcontainer">
								<span onclick="document.getElementById('feedback').style.display='none'" class="close" title="Close PopUp">&times;</span>
								<h1 style="text-align:center">Create New Feedback</h1>
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
		<button class="mainbutton" onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:150px; margin-top:150; ">
			New Ticket!</button>

		<div id="modal-wrapper" class="modal">

			<form method="POST" class="modal-content animate" action="{{ route('ticket') }}" enctype="multipart/form-data">
				@csrf

				<div class="imgcontainer">
					<span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
					<h1 style="text-align:center">Create New Ticket</h1>
				</div>

				<div class="container">

					<div class="dropdown">
						<select id="select" name="select" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" required>
							Pleas Select The Type
							<option class="dropdown-item flaticon-books"   value="Advise about course">Advise about course</option>
							<option class="dropdown-item flaticon-reading"  value="Advise study plan">Advise study plan</option>
							<option class="dropdown-item flaticon-teacher" value="Advise on social problem">Advise on social problem</option>
							</select>

						</div>
					</div>
					<br>
					<textarea id="w3mission" name="content" rows="4" cols="130" required>

				</textarea>
				<input class="btn btn-lg btn-primary btn-block" type="submit">
			</form>

		</div>
	</div>
</div>




@endsection