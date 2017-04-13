<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        //
        DB::table('users')->insert(
                        array(
                                array(
                                        'first_name' => 'Shefali',
                                        'last_name' => 'Munjal',
                                        'user_name'  => 'shefalimunjal',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'shefali@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Kannu',
                                        'last_name' => 'Mehta',
                                        'user_name'  => 'kannumehta',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'kannu@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Shefali',
                                        'last_name' => 'Munjal',
                                        'user_name'  => 'shefalimunjal',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'shefali1@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Kannu',
                                        'last_name' => 'Mehta',
                                        'user_name'  => 'kannumehta',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'kannu1@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Shefali',
                                        'last_name' => 'Munjal',
                                        'user_name'  => 'shefalimunjal',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'shefali2@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Kannu',
                                        'last_name' => 'Mehta',
                                        'user_name'  => 'kannumehta',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'kannu2@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Shefali',
                                        'last_name' => 'Munjal',
                                        'user_name'  => 'shefalimunjal',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'shefali3@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Kannu',
                                        'last_name' => 'Mehta',
                                        'user_name'  => 'kannumehta',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'kannu3@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Shefali',
                                        'last_name' => 'Munjal',
                                        'user_name'  => 'shefalimunjal',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'shefali4@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Kannu',
                                        'last_name' => 'Mehta',
                                        'user_name'  => 'kannumehta',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'kannu4@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Shefali',
                                        'last_name' => 'Munjal',
                                        'user_name'  => 'shefalimunjal',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'shefali5@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Kannu',
                                        'last_name' => 'Mehta',
                                        'user_name'  => 'kannumehta',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'kannu5@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Shefali',
                                        'last_name' => 'Munjal',
                                        'user_name'  => 'shefalimunjal',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'shefali6@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Kannu',
                                        'last_name' => 'Mehta',
                                        'user_name'  => 'kannumehta',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'kannu6@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Shefali',
                                        'last_name' => 'Munjal',
                                        'user_name'  => 'shefalimunjal',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'shefali7@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Kannu',
                                        'last_name' => 'Mehta',
                                        'user_name'  => 'kannumehta',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'kannu7@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Shefali',
                                        'last_name' => 'Munjal',
                                        'user_name'  => 'shefalimunjal',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'shefali8@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Kannu',
                                        'last_name' => 'Mehta',
                                        'user_name'  => 'kannumehta',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'kannu8@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Shefali',
                                        'last_name' => 'Munjal',
                                        'user_name'  => 'shefalimunjal',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'shefali9@sjsu.edu'
                                ),
                                array(
                                        'first_name' => 'Kannu',
                                        'last_name' => 'Mehta',
                                        'user_name'  => 'kannumehta',
                                        'home_address'  => '754 The Alameda, San Jose, 95126',
                                        'home_phone'  => '1234567890',
                                        'cell_phone'  => '1234567890',
                                        'email'  => 'kannu9@sjsu.edu'
                                )

                        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
