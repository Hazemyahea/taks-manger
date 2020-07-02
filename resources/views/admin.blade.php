@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
          <h1 class="text-cemter"> {{__('lang.add admin')}}</h1>
          {!! Form::open(['method'=>'POST','action'=>'UserController@store','enctype' => 'multipart/form-data']) !!}


       <div class="form-group">
           {{Form::label('name', 'name : ')}}
           {{Form::text('name',null,['class'=>'form-control'])}}
       </div>
       <div class="form-group">
           {{Form::label('email', 'email : ')}}
           {{Form::email('email',null,['class'=>'form-control'])}}
       </div>
       <div class="form-group">
           {{Form::label('password', 'password : ')}}
           <input class="form-control" type="password" name="password" value="">
       </div>
       {{Form::submit('Create Admin',['class'=>'btn btn-danger'])}}
       {!! Form::close() !!}
        </div>
        <div class="col-md-12">
          <br>
          <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('lang.name')}}</th>
            <th scope="col">{{__('lang.email')}}</th>
            <th scope="col">{{__('lang.created at')}}</th>
            <th scope="col">{{__('lang.update at')}}</th>

          </tr>
        </thead>
        <tbody>
          @if($users->count() > 0)
          @foreach($users as $user)
          <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
          </tr>
          @endforeach
@else
<h3>No Admin Yet</h3>
@endif
        </tbody>
      </table>
        </div>
    </div>
</div>
@endsection
