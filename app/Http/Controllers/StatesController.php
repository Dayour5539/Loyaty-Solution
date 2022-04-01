<?php

namespace App\Http\Controllers;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatesController extends Controller
{
  public function state()
    {
        if(Auth::check()){
            return view('state');
        }
  
        return redirect("login")->withSuccess('Please Login');
    }

    public function postState(Request $request)
    {  
        $request->validate([
            'name' => 'required',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('State Successfully Created');
    }
    public function create(array $data)
    {
      return State::create([
        'name' => $data['name'],
      ]);
    }
}
