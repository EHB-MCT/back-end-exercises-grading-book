<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'student@ehb.be',
            'password' => Hash::make('student'),
            'role' => User::ROLE_STUDENT,
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'admin@ehb.be',
            'password' => Hash::make('admin'),
            'role' => User::ROLE_ADMIN,
        ]);

        User::factory(10)->create();
    }
}
