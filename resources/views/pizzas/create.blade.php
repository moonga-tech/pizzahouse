@extends("layouts.layout")

@section("content")
    <div class="container create-form">
        <h1>Create A New Pizza</h1>
        <form action="/pizzas" method="POST">
        @csrf
            <label for="name">Your Name: </label>
            <input type="text" name="name" id="name" placeholder="full name">
            <label for="type">Choose pizza type: </label>
            <select name="type" id="type">
                <option value="margherita">Margherita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg supreme</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="base">Choose base type: </label>
            <select name="base" id="base">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="Thick">Thick</option>
            </select>

            <!-- <fieldset>
                <label for="toppings">Extra Toppings</label>
                <input type="checkbox" name="toppings[]" id="toppings" value="mushrooms">Mushrooms<br />
                <input type="checkbox" name="toppings[]" id="toppings" value="peppers">Peppers<br /><input type="checkbox" name="toppings[]" id="toppings" value="garlic">Garlic<br />
            </fieldset> -->

            <button type="submit">Order Pizza</button>
        </form>
    </div>
@endsection