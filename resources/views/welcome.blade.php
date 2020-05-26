@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <img class="resize" src="/img/logo.png" alt="page logo">
            <div class="title m-b-md">
                The Social Calendar That Brings People Together
            </div>
            <p class="mssg">{{session('mssg')}}</p>
            <a href="{{route('events.create')}}">Schedule an event</a>
            <p></p>
            <a href="{{route('events.index')}}">View all events</a>
        </div>
    </div>
@endsection
