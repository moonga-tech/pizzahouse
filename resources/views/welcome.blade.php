@extends("layouts.layout")

@section("content")
    <div class="container">
        <div class="pizza-house-logo">
            <img src="img/logo_trans.png" alt="pizza house logo">
        </div>
        <div class="div-box">
            <h1>The Zambian's Best Pizzas</h1>
        </div>
        <p class="mssg">{{ session("mssg") }}</p>
        <a href="/pizzas/create">Order a Pizza</a>
    </div>
@endsection