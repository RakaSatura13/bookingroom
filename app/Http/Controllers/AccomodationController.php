<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class AccomodationController extends Controller
{
    
    function index()
    {
        $data = Hotel::all();
        return view('accomodation',compact('data'));
    }
}
