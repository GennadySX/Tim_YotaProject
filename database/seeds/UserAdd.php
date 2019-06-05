<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAdd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name' => 'root',
            'email' => 'root@mail.com',
            'password' => bcrypt('unlockroot')
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('unlockMe')
        ]);
        DB::table('users')->insert([
            'name' => 'General',
            'email' => 'general@mail.com',
            'password' => bcrypt('general')
        ]);
        DB::table('roles_user')->insert([
            'user_id' => '1',
            'role_id' => '1'
        ]);
        DB::table('roles_user')->insert([
        'user_id' => '2',
        'role_id' => '2'
        ]);
        DB::table('roles_user')->insert([
            'user_id' => '3',
            'role_id' => '3'
        ]);





    }
}
