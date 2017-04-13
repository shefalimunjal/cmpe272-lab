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
