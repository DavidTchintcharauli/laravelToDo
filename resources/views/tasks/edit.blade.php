@extends('layouts.app')

@section('content')
    <h1>Edit Task</h1>

    {{ Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) }}
        <div class="form-group">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description') }}
            {{ Form::textarea('description', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
            <button class="bg-blue-500 text-white py-2 px-4 rounded">Submit</button>

        </div>
    {{ Form::close() }}
@endsection