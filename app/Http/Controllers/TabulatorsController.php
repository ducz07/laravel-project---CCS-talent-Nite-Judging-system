<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabulator;
use DB;

class TabulatorsController extends Controller
{
    public function tabulate(){

    	//$tabulators = DB::table('tabulators')->where('j1_performance'->$j1_performance, 'j1_entertainment', 'j1_costume', 'j1_audience')->sum('j1_performance', 'j1_entertainment', 'j1_costume', 'j1_audience');


    	$tabulators = Tabulator::all();

   		return view('tabulate')->with(compact('tabulators'));
   		}
    
}
