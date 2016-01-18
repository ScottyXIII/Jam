<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
   public function index() 
    {
		$data = array(); 

 	 	return view('home')->with($data);
    }
}
