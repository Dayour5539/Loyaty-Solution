<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ReportsController extends Controller
{
    function state(Request $request)
    {
        $states = DB::table('states')
            ->selectRaw('count(distinct(states.id)) as statecount')
            ->get();
        return view('report',  compact(['states']));
    }
    function lga(Request $request)
    {
        $lgas = DB::table('lgas')
            ->selectRaw('count(distinct(lgas.id)) as lgacount')
            ->get();
            return view('rward',  compact(['lgas']));
    }
    function ward(Request $request)
    {
        $wards = DB::table('wards')
            ->selectRaw('count(distinct(wards.id)) as wardcount')
            ->get();
            return view('report',  compact(['wards']));
    }
    function citizen(Request $request)
    {
        $citizens = DB::table('citizens')
            ->selectRaw('count(distinct(citizens.id)) as citizencount')
            ->get();
            return view('report',  compact(['citizens']));
    }
    public function report()
    {
        if (Auth::check()) {
            return view('report');
        }

        return redirect("login")->withSuccess('Please Login');
    }
}
