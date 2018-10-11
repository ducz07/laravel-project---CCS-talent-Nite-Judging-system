<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabulator;

class ResultsController extends Controller
{
    public function result(){

    	$tabulators = Tabulator::all();

   		return view('result')->with(compact('tabulators'));
   		
    }
}
