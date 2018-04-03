@extends('layout')


@section('content')
        
    <div class="row">
        <form method="post" action="/create/todo">
            <div class="form-group">
                {{csrf_field()}}
                <input class="form-control" placeholder="Add New Todo" name="todo">
            </div>
        </form>
        
    </div>
        
       @foreach($todos as $todo)
            {{ $todo->todo}}
            <a href="todo/delete/{{$todo->id}}" class="btn btn-danger">Delete</a>
            <a href="todo/update/{{$todo->id}}" class="btn btn-info">Update</a>
            @if($todo->completed)
                <span>Completed ! </span>
            @else
                <a href="todo/complete/{{$todo->id}}" class="btn btn-success">Complete</a>
            @endif
            
            <br>
       @endforeach
@stop