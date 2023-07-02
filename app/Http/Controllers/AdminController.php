<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //


    public function __construct(){
        $this->middleware('isAdmin');
    }

    public function index(){
        $user = Auth::user();
        if($user->isAdmin()) {
            return "You have the right permissions";
        } else {
            return 'You do not have the right permissions';
        }
    }






}
