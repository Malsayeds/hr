<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{



			public function home()	 {
	
			return view('welcome');

			}
	
		   public function about()
		   {
		   	$pepole = ['ali','asdasd'];
		   	return view('pages.about',compact('pepole',$pepole));
		   }


		   		
		

   	
}
