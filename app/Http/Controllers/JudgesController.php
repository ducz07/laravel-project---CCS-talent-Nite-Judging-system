<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Judge;
use Illuminate\Support\Facades\Input;
class JudgesController extends Controller
{
    public function judge()
    {

    	$judges = Judge::all();

   		return view('judge')->with(compact('judges'));
   		}

    public function addjudge(){

        return view('addjudge');
    }

      public function insertjudge(Request $request){
        $this->validate($request, [
            'fullname' => 'required',
            'background' => 'required'
        ]);
        
        $value = $request->all();
        Judge::create($value);
        return redirect('judge');
    }

   		public function editjudge($id)
    {
        $value = Judge::find($id);
        return view('editjudge', compact('value'));
    }

    public function updatejudge(Request $request, $id)
    {
        $this->validate($request, [
            'fullname'=>'Required',
            'background'=>'Required'
        ]);

        $value = Judge::find($id);
        $valueUpdate = $request->all();
        $value->update($valueUpdate);
        return redirect('judge');
    }

    public function deletejudge($id)
    {
        Judge::find($id)->delete();
        return redirect('judge');
    }

     public function imageUpload(Request $request)
    {
        $user = new file;

        $user->fullname=Input::get('image');
        if(Input::hasFile('image')){
            $file=Input::file('image');
            $file->move(public_path(). '/', $file->getClientOriginalName());

            $user->image = $file->getClientOriginalName();
        }

        $user->save();
    }
    
}
