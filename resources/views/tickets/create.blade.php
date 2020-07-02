@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
          <h1 class="text-cemter"> Add Ticket </h1>
          {!! Form::open(['method'=>'POST','action'=>'TicketController@store','enctype' => 'multipart/form-data']) !!}

       <div class="form-group">
           {{Form::label('title', 'title : ')}}
           {{Form::text('title',null,['class'=>'form-control'])}}
       </div>
       <div class="form-group">
           {{Form::label('body', 'body : ')}}
           <textarea class="form-control" name="body" rows="8" cols="80"></textarea>
       </div>
       <div class="form-group">
           {{Form::label('dead_lind', 'dead_lind : ')}}
           <input class="form-control" type="date" name="dead_lind" value="">
       </div>
       <div class="form-group">
           {{Form::label('assign', 'assign : ')}}
           <select name="assign" class="form-control">
                @foreach($users as $user)
                    <option value="{{$user->name}}">{{$user->name}}</option>
                @endforeach
            </select>
       </div>
       <div class="form-group">
           {{Form::label('status', 'status : ')}}
           <select name="status" class="form-control">

                    <option value="open">open</option>
                    <option value="close">close</option>
                    <option value="wating">wating</option>

            </select>
       </div>
       {{Form::submit('Create Ticket',['class'=>'btn btn-danger'])}}
       {!! Form::close() !!}
        </div>
      </div>
</div>

@endsection
