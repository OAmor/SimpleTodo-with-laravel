@extends('layout')

@section('content')

    <form action="/save/{{ $todo->id }}" method="post">
        {{csrf_field()}}
        <input type="text" class="form-control" value="{{ $todo->todo}}" name="todo">
    </form>

@stop