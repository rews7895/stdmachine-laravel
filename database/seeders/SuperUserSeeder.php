<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('role_id', 100)->count()) {
            User::create([
                'name' => env('SUPER_USER_NAME', '관리자'),
                'email' => env('SUPER_USER_EMAIL', 'superuser@stdmachine.com'),
                'password' => Hash::make(env('SUPER_USER_PASSWORD', 'password')),
                'phone' => env('SUPER_USER_PHONE', '01011111111'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'role_id' => 100
            ]);
        }
    }
}