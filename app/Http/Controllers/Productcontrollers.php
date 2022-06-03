<?php

namespace App\Http\Controllers;

use App\History;
use App\Productcontroller;
use Illuminate\Http\Request;

class Productcontrollers extends Controller
{

    public function prod(){
        $data= Productcontroller::all();
        return view('prod', compact('data'));
    }
}
