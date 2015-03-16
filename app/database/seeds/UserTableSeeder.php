<?php

use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Eloquent\Collection;
use _cms\User\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create([
            'first_name' => 'System',
            'last_name'  => 'Administrator',
            'username'   => 'admin',
            'email'      => 'postmaster@domain.com',
            'password'   =>  Hash::make('secret')
        ]);

        User::create([
            'first_name' => 'User',
            'last_name'  => 'Normal',
            'username'   => 'user',
            'email'      => 'user@domain.com',
            'password'   =>  Hash::make('normal')
        ]);
    }

}
