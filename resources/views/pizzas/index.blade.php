 @extends('layouts.app')

 @section('content')
    <div class="flex-center position-ref full-height">
    
        <div class="content">
            <div class="wrapper pizza-index">
                <div class="title m-b-md">
                    All events
                </div>
                @foreach ($pizzas as $pizza)
                    <div class="pizza-item">
                        <h4><a href="/events/{{$pizza->id}}">{{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}</a></h4>
                    </div>                    
                @endforeach
                <a href="/" class="center">Return to home</a>
            </div>
        </div>
    </div>
    
 @endsection      
