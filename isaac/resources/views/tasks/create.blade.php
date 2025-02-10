@extends('layouts.app')

@section('content')
    <h1>Create New Task</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>

        <div>
            <label for="is_completed">Completed</label>
            <input type="checkbox" name="is_completed" id="is_completed">
        </div>

        <button type="submit">Create Task</button>
    </form>
@endsection
