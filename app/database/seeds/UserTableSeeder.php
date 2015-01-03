<?php

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'anrede'   => 'Herr',
            'vorname'  => 'Jon',
            'nachname' => 'Doe',
            'email'    => 'admin@admin.app',
            'password' => 'admin'
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

        DB::table('role_user')->insert(array(
            'role_id' => 1,
            'user_id' => 1
        ));
    }

}