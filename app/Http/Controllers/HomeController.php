<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __constructor(){
        $this->middleware('auth');
    }

    public function index(Request $request){

        // $request->session()->put(['omar'=>'master student']);

        return $request->session()->all();

        // return view('/dashboard');

    }


}
