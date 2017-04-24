<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class User extends Controller {

	public function home(Request $request) {
    	return view("pages.user_home");
   	}

    public function index(Request $request) {
    	$users = DB::select('select * from users');
    	return view("pages.users", ['users' => $users]);
   	}

    public function all_domain_users(Request $request) {
      $users = DB::select('select * from users');
      return view("pages.all_domain_users", ['users' => $users]);
    }

   	public function new_user(Request $request){
   		$success = $request->input('success') == 'true';
    	return view("pages.new_user", ['success' => $success]);
   	}

   	public function create(Request $request) {
   		$first_name = $request->input('first_name');
   		$last_name = $request->input('last_name');
   		$user_name = $request->input('user_name');
   		$email = $request->input('email');
   		$home_address = $request->input('home_address');
   		$home_phone = $request->input('home_phone');
   		$cell_phone = $request->input('cell_phone');
    	DB::insert('insert into users (first_name, last_name, user_name, email, home_address, home_phone, cell_phone) values (?, ?, ?, ?, ?, ?, ?)', 
    		[$first_name, $last_name, $user_name, $email, $home_address, $home_phone, $cell_phone]);

    	header("Location: /users/new?success=true");
        exit;
   	}

   	public function search(Request $request){
    	return view("pages.search_user");
   	}

   	public function search_results(Request $request) {
   		$search_field = $request->input('field');
   		$search_value = $request->input('value');
   		$users = DB::select("select * from users where ".$search_field." = '".$search_value."'");
    	return view("pages.users", ['users' => $users]);
   	}
}
