<?php

namespace App\Http\Controllers;

use App\Models\Citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CitizensController extends Controller
{
    public function postCitizen(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'lga_id' => 'required',
            'phone' => 'required',
            'ward_id' => 'required',
            'state_id' => 'required',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Citizen Successfully Created');
    }
    public function citizen()
    {
        if(Auth::check()){
            return view('citizen');
        }
  
        return redirect("login")->withSuccess('Please Login');
    }
    public function create(array $data)
    {
        return Citizen::create([
            'name' => $data['name'],
            'gender' => $data['gender'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'ward_id' => $data['ward_id'],
            'lga_id' => $data['lga_id'],
            'state_id' => $data['state_id'],
        ]);
    }
}
