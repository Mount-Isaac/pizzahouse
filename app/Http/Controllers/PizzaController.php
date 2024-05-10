<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    //
    public function index() {
        // get data from db 

        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name')->get();
        // $pizzas = Pizza::where('name', 'Volcano')->get();
        $pizzas = Pizza::latest()->get();

        // query parameter
        $age = request('age');

        // $pizzas = [
        //     ['type'=> 'hawaiian', 'base' => 'cheesy crust'],
        //     ['type'=> 'volcano', 'base' => 'garlic crust'],
        //     ['type'=> 'veg supreme', 'base' => 'thin & crispy'],
        // ];

        return view('index', ['pizzas' => $pizzas, 'age' => $age]);

    }

    public function show($id) {

        // use id variable to query from db
        // return pizza details whose id value
        //  matches this value passed by user
        
        return view('show', ['id'=>$id]);

    }
}
