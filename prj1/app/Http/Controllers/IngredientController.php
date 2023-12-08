<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ingredient;

class IngredientController extends Controller
{
    public function index(){
        $ingredients = Ingredient::all();
        return view('/ingredients/select',['ingredients' => $ingredients]);
    }

    public function create(Request $request){
        $ingredients = new Ingredient;
        $ingredients->name = $request->name;
        $ingredients->brand = $request->brand;
        $ingredients->price = $request->price;
        $ingredients->save();

        return redirect('/ingredients/select');
    }

    public function update(Request $request){
        $ingredients = Ingredient::find($request->id);
        $ingredients->name = $request->name;
        $ingredients->brand = $request->brand;
        $ingredients->price = $request->price;
        $ingredients->save();
        return redirect('/ingredients/select');
    }

    public function delete(Request $request){
        $ingredients = Ingredient::where('id',$request->id)->delete();
        return redirect('/ingredients/select');
    }
}
