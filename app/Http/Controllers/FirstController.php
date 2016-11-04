<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function hello(){
    	return "Hi guys!";
    }

    public function returnViewPage1($var, $jantina){
        $arr = ["hazim", "pro", "awp"];
        return view("page1", compact("var", "jantina", "arr"));
    }

    public function calculator($operation, $num1, $num2){
    	switch ($operation) {
    		case 'tambah':
    			return $num1 + $num2;
    			break;


    		case 'tolak':
    			return $num1 - $num2;
    			break;

    		case 'darab':
    			return $num1 * $num2;
    			break;

    		case 'bahagi':
    			return $num1 / $num2;
    			break;
    		
    		default:
    			# code...
    			break;
    	}
    }

    public function returnYieldView(){
        return view("admin");
    }
}
