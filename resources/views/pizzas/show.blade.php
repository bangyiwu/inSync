@extends('layouts.app')

@section('content')
    <div class="wrapper pizza-details">
        <h1>
            Event for {{$pizza->name}}
        </h1>
        <p class="type">
            Type - {{$pizza -> type}}
        </p>
        <p class="base">
            Location - {{$pizza -> base}}
        </p>
        <p class="toppings">Extra toppings:</p>
        <ul>
            @foreach($pizza->toppings as $topping)
            <li>{{$topping}}</li>
            @endforeach
        </ul>
        <form action="{{route('events.destroy', $pizza -> id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button>
                Remove Event
            </button>
        </form>
    </div>
    <a href="/events" class="back"> <- Back to all events </a>
@endsection      
