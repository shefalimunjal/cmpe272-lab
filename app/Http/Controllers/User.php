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

    public function marketplace() {
        # 1. get users from database
        $users = DB::select('select * from users');

        # 2. get users from rainadventures (Kanika Jain)
        $users_1_html = file_get_contents('http://rainieradventureclub.com/memberlist.php');

        # 3. get users from travelswags (Rency Joseph)
        $users_2_html = file_get_contents('http://travelswags.com/execute-search-all');
        $users_2_html = $this->filter_table_from_html($users_2_html);

        # 4. return html page
        return view("pages.marketplace_users", ['users' => $users, 'users_1_html' => $users_1_html, 'users_2_html' => $users_2_html]);
    }

    public function filter_table_from_html($users_html) {
        $lines = explode("\n", $users_html);
        $filtered_lines = array();
        $keep_line = false;
        foreach ($lines as $line) {

            // 1. check if table tag starts
            if (strpos($line, '<table') !== false) {
                $keep_line = true;
            }

            // 2. add line to html 
            if ($keep_line) {
                array_push($filtered_lines, $line);
            }

            // 3. check if table tag ends
            if (strpos($line, '</table') !== false) {
                $keep_line = false;
            }
        }

        return join("\n", $filtered_lines);
    }
}
