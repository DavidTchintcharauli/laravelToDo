@extends('layouts.app')
@section('content')
    <h1>Task List</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->title }}</li>
            {{ Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete', 'class' => 'delete-form']) }}
            {{ Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick' => 'return confirm("Are you sure you want to delete this task?")']) }}
            {{ Form::close() }}
        @endforeach
    </ul>
    {{ Form::open(['route' => 'tasks.create', 'method' => 'get']) }}
    {{ Form::submit('Create New Task', ['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
@endsection