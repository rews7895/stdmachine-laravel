<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Role::count()) {
            $basic_roles = [
                [
                    'id' => 1,
                    'role_name' => '일반 유저',
                ],
                [
                    'id' => 10,
                    'role_name' => '인가된 유저',
                ],
                [
                    'id' => 80,
                    'role_name' => '관리자급 유저',
                ],
                [
                    'id' => 100,
                    'role_name' => '슈퍼 유저',
                ],
            ];

            foreach ($basic_roles as $roles) {
                Role::create($roles);
            }
        }
    }
}