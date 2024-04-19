@extends('layouts.app')

@section('content')
    <h1>Task List</h1>

    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->title }}</li>
        @endforeach
    </ul>
@endsection