<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
  public function index (){
  
    $pizzas = Pizza::all();

            return view('pizzas.index',[
            'pizzas' => $pizzas,
            ]) ;
  }

public function show($id){

   $pizza = Pizza::findorFail($id);

    return view('pizzas.show',['pizza' => $pizza]) ;
}

public function create (){
return view ('pizzas.create');

}

public function store(){

$pizza = new Pizza();

$pizza->address = request('address');
$pizza->type = request('type');
$pizza->shotno = request('shotno');
$pizza->extras = request('extras');

$pizza->save();

return redirect('/')->with('mssg','Thank you');

}

public function delete($id) {
  $pizza = Pizza::findOrFail($id);
  $pizza->delete();

  return redirect('/pizzas');
}

};
