<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza2;

class PizzaController extends Controller
{
    public function main(){
    	return view('pizza');
    }

    public function hello(){
    	//insert
    	// $pizza = new Pizza2;
    	// $pizza->name = "Hawaiian";
    	// $pizza->details = "This is the best pizza";
    	// $pizza->mainIngredient = "Squirell";
    	// $pizza->save();

    	$arr = Pizza2::where('name', 'Ayam')->where('id', 2)->get();
    	echo $arr;
    	foreach ($arr as $obj) {
    		$obj->name = "Ayam";
    		// $obj->save();

    		$obj->delete() ;
    	}
    }
}
