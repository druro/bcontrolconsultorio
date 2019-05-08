<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome()
    {

    	return view('welcome');
    }



	public function suma()
	{
			$a = 5;
			$b = 12;
			$c = $a + $b;
    	return " la suma de a mas b es $c";
    }
    public function resta()
	{
			$a = 5;
			$b = 3;
			$c = $a - $b;
    	return " la suma de a mas b es $c";
    }
}


    
   

