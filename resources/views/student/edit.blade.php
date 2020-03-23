@extends('main')
@section('title','Edit')
@section('contete2')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Edit Ticket</div>

                    <div class="card-body">
                        <form action="{{url('/update'.$ticket->id)}}" id="form" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="Content">Content</label>
                                <input class="form-control" id="content" type="text" name="content" placeholder="content" value="{{$ticket->content ?? ''}}" required>
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
                            <button class="btn btn-primary bg-dark" type="submit" id="save">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection