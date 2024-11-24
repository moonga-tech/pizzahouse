@extends("layouts.layout")

@section("content")
    <div class="div-box">
        <h1>Order for {{ $pizza->name }}</h1>
        <p class="type">Type - {{ $pizza->type }}</p>
        <p class="base">Base - {{ $pizza->base }}</p>
    </div>

    <a href="/pizzas" class="back-to-pizza">Back to All Pizzas</a>
@endsection