<?php

namespace App\Http\Controllers;
use App\Models\Lga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LgasController extends Controller
{
    public function postLga(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'state_id' => 'required'
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('LGA Successfully Created');
    }
    public function lga()
    {
        if(Auth::check()){
            return view('lga');
        }
  
        return redirect("login")->withSuccess('Please Login');
    }
    public function create(array $data)
    {
      return Lga::create([
        'name' => $data['name'],
        'state_id' => $data['state_id'],
      ]);
    }
}
