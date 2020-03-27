@extends('layouts.default')

@section('content')
            @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/home') }}" class="button">Home</a>
                        <a href="{{ url('/tasks') }}" class="button button-primary">Tasks</a>
                    @else
                        <a href="{{ route('login') }}" class="button">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="button button-primary">Register</a>
                        @endif
                    @endauth
            @endif
@endsection
