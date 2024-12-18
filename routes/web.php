<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [PizzaController::class, "index"]);

Route::get('/pizzas/create', [PizzaController::class, "create"]);

Route::post('/pizzas', [PizzaController::class, "store"]);

Route::get('/pizzas/{id}', [PizzaController::class, "show"]);

