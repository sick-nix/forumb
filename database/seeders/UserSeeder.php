<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'     => config('auth.admin_username'),
            'email'    => config('auth.admin_email'),
            'password' => config('auth.admin_password'),
            'role' => RoleEnum::ADMIN->value,
        ]);
    }
}
