<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Administrator",
            "email" => "admin@local.tld",
            "password" => Hash::make("123456"),
        ]);
    }
}
