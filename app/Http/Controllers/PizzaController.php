<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PizzaController;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    //pizza list
    public function index() {
        
        //$pizzas = Pizza::all();
        $pizzas = Pizza::orderBy("name", "asc")->get();
    
        return view('pizzas.index', [
            "pizza_list" => $pizzas
        ]);
    }

    //input id
    public function show($id) {

        $pizza = Pizza::findOrFail($id);

        return view("pizzas.show", ["pizza" => $pizza]);
        
    }

    //create new pizza
    public function create() {
        return view("pizzas.create");
    }

    public function store() {
        $pizza = new Pizza();
        $pizza->name = request("name");
        $pizza->type = request("type");
        $pizza->base = request("base");
        /* $pizza->toppings = request("toppings"); */
        
        $pizza->save(); 

        return redirect("/")->with("mssg", "Thank you for your order");
    }
}
