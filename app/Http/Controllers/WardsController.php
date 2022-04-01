<?php

namespace App\Http\Controllers;
use App\Models\Ward;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WardsController extends Controller
{
    public function postWard(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lga_id' => 'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Ward Successfully Created');
    }
    public function ward()
    {
        if(Auth::check()){
            return view('ward');
        }
  
        return redirect("login")->withSuccess('Please Login');
    }
    public function create(array $data)
    {
        return Ward::create([
            'name' => $data['name'],
            'lga_id' => $data['lga_id'],
        ]);
    }
}
