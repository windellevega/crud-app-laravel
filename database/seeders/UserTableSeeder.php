<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'firstname'     => 'John',
                'lastname'      => 'Doe',
                'username'      => 'johndoe',
                'email'         => 'johndoe@test.com',
                'password'      => Hash::make('pass123')
            ],
            [
                'firstname'     => 'Jane',
                'lastname'      => 'Doe',
                'username'      => 'janedoe',
                'email'         => 'janedoe@test.com',
                'password'      => Hash::make('pass123')
            ]
        ];

        foreach($users as $user)
        {
            DB::table('users')->insert($user);
        }
    }
}
