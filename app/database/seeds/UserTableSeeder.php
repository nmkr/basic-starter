<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'anrede'   => 'Herr',
            'vorname'  => 'Alex',
            'nachname' => 'M.',
            'email'    => 'office@nmkr.at',
            'password' => 'changeme'
        ));

        User::create(array(
            'anrede'   => 'Herr',
            'titel'    => 'Dr.',
            'vorname'  => 'Max',
            'nachname' => 'Mustermann',
            'email'    => 'max@muster.at',
            'password' => 'changeme'
        ));

        Role::create(array(
            'name' => 'admin'
        ));

        Role::create(array(
            'name' => 'member'
        ));

        Role::create(array(
            'name' => 'trial'
        ));

        DB::table('role_user')->create(array(
            'role_id' => 1,
            'user_id' => 1
        ));

        DB::table('role_user')->create(array(
            'role_id' => 2,
            'user_id' => 2
        ));
    }

}