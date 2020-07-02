@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

                <div class="card-header">{{ __('Dashboard') }} ||
                    Ticket Assign : <span style="color:red">{{$tickets->count()}}</span>
                </div>


                  <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('lang.Owner')}}</th>
                    <th scope="col">{{__('lang.title')}}</th>
                    <th scope="col">{{__('lang.body')}}</th>
                    <th scope="col">{{__('lang.assign to')}}</th>
                    <th scope="col">{{__('lang.dead line')}}</th>
                    <th scope="col">{{__('lang.status')}}</th>
                    <th scope="col">{{__('lang.created at')}}</th>
                    <th scope="col">{{__('lang.update at')}}</th>
                    <th scope="col">{{__('lang.edit')}}</th>
                    <th scope="col">{{__('lang.delete')}}</th>
                  </tr>
                </thead>
                <tbody>
                  @if($tickets->count() > 0 )
                  @foreach($tickets as $ticket)
                  <tr>
                    <th scope="row">{{$ticket->id}}</th>
                    <td>{{$ticket->user->name}}</td>
                    <td>{{$ticket->title}}</td>
                    <td>{{$ticket->body}}</td>
                    <td>{{$ticket->assign}}</td>
                    <td>{{$ticket->dead_lind}}</td>
                    <td>{{$ticket->status}}</td>
                    <td>{{$ticket->created_at->diffForHumans()}}</td>
                    <td>{{$ticket->updated_at->diffForHumans()}}</td>
                    <td>   <a href="{{route('tickets.edit',$ticket->id)}}"><button class="btn btn-primary">{{__('lang.edit')}}</button></a></td>
                    <td>

                              {!! Form::open(['method' => 'DELETE','action'=>['TicketController@destroy', $ticket->id],'files'=>true]) !!}

                              {{Form::submit('delete',['class'=>'btn btn-danger'])}}
                              {!! Form::close() !!}
                    </td>
                  </tr>
                  @endforeach
                  @else
                  <h3>No Tickets Yet</h3>
                  @endif

                </tbody>
              </table>
                <button class="btn btn-primary"> <a style="color:white" href="{{ url('/admin') }}">{{__('lang.add admin')}}</a> </button>
                <button class="btn btn-success"> <a style="color:white" href="{{ url('/tickets/create') }}">{{__('lang.add ticket')}}</a> </button>
        </div>
    </div>
</div>
@endsection
