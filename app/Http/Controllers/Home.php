<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Home extends Controller{

	public function index(Request $request){
      return view("index");
   	}

	public function products(Request $request){
      return view("pages.products");
   	}

   public function about_us(Request $request){
      return view("pages.about_us");
   }

   public function news(Request $request){
      return view("pages.news");
   }

   public function contact_us(Request $request){
      return view("pages.contact_us");
   }

   public function admin_login(Request $request){
      return view("pages.admin_login");
   }

   public function authenticate(Request $request){
   		$username = $request->input("username");
   		$password = $request->input("password");

   		if($username == 'admin' && $password == 'admin'){
            //set cookie
            $number_of_days = 1 ;
            $date_of_expiry = time() + 60 * 60 * 24 * $number_of_days ;
            setcookie( 'is_logged_in', "true", $date_of_expiry, '/' );
            header("Location: /users");
            exit;
        } else {
        	header("Location: /access_denied");
    		exit;
        }
   }

   public function access_denied(Request $request){
      return view("pages.access_denied");
   }
    
}
