@extends('layouts.app')
@section('content')
    <h1>Task List</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->title }}</li>
        @endforeach
    </ul>
    {{ Form::open(['route' => 'tasks.create', 'method' => 'get']) }}
    {{ Form::submit('Create New Task', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
@endsection