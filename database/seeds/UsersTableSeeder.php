<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'password'=> \Illuminate\Support\Facades\Hash::make('123456'),
            'role'=> \App\User::ROLE['Admin'],
            'status'=> config('app.active'),
            'email_verified_at'=>\Carbon\Carbon::now(),
            'user_name'=>'admin',
            'phone_no'=>'1234567890'
        ]);
    }
}
