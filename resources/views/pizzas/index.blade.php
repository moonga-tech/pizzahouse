@extends("layouts.layout")

@section("content")
    <div class="div-box">
        <h1>Pizza List</h1>
        
        @foreach($pizza_list as $pizza)
            <div>
                {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
            </div>
        @endforeach
    </div>
@endsection