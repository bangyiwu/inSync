@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new event</h1>
    <form action="/events" method="POST">
        @csrf
        <label for="name"> Your name </label>
        <input type="text" id="name" name="name">
        <label for="type"> Choose Event Type </label>
        <select name="type" id="type">
            <option value="Arts Practice"> Arts Practice </option>
            <option value="Academics"> Academics </option>
            <option value="Sports Training"> Sports Training </option>
            <option value="Committee Meeting"> Committee Meeting </option>
        </select>
        <label for="base"> Choose Facility Type </label>
        <select name="base" id="base">
            <option value="MPC"> MPC </option>
            <option value="Function Hall"> Function Hall </option>
            <option value="Block Lounge"> Block Lounge </option>
            <option value="Dance Studio"> Dance Studio </option>
        </select>
        <fieldset>
            <label>Event details: </label>
            <input type="checkbox" name ="toppings[]" value = "mushrooms"> Mushrooms <br />
            <input type="checkbox" name ="toppings[]" value = "peppers"> Peppers <br />
            <input type="checkbox" name ="toppings[]" value = "garlic"> Garlic <br />
            <input type="checkbox" name ="toppings[]" value = "olives"> Olives <br />
        </fieldset>
        <input type="submit" value ="Create Event">
    </form>
</div>
@endsection      
