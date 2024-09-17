<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        if($request->method() == "POST"){
            dd($request->all());
        }
        return view('form');
    }
}
