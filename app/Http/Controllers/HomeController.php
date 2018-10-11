<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Participant;


class HomeController extends Controller
{
   		public function index(){

        return view('home');
      }

      public function participants(){

   			$participants = Participant::all();

   		return view('participants')->with(compact('participants'));
   		}

      public function add(){

        return view('addparticipants');
    }

      public function insert(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'talent' => 'required'
        ]);
        
        $value = $request->all();
        Participant::create($value);
        return redirect('participants');
    }

   		public function edit($id)
    {
        $value = Participant::find($id);
        return view('editparticipants', compact('value'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'Required',
            'talent'=>'Required'
        ]);

        $value = Participant::find($id);
        $valueUpdate = $request->all();
        $value->update($valueUpdate);
        return redirect('participants');
    }

    public function delete($id)
    {
        Participant::find($id)->delete();
        return redirect('participants');
    }
}
