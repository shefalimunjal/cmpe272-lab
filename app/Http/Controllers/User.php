<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class User extends Controller{

    public function index(Request $request){
      return view("pages.users");
   	}
}
