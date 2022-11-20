<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function input(){
        return view('admin.fibonacci',['title'=>"fibonacci"]);
    }
}
