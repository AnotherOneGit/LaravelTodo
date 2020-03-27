@extends('layouts.default')

@section('content')

    @if (Route::has('login'))
        @auth
            <a href="{{ url('/home') }}" class="button">Home</a>
        @else
            <a href="{{ route('login') }}" class="button">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="button button-primary">Register</a>
            @endif
        @endauth
    @endif

    @include('common.errors')
    <form action="{{ url('task') }}" method="post">
        @csrf
        <label for="task-name">Task</label>
        <input type="text" name="name" id="task-name">
        <button type="submit">Add task</button>
    </form>

    @if (count($tasks)>0)
        <p>Current Tasks</p>
        @foreach($tasks as $task)
            {{ $task->name }}

            <form action="{{ url('task/'.$task->id) }}" method="post">
                @csrf
                @method('DELETE')

                <button type="submit" id="{{ $task->id }}">Delete</button>
            </form>

            <br>
        @endforeach
    @endif

@endsection
