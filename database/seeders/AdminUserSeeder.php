<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@labquimic.com'],
            [
                'name' => 'Administrador',
                'password' => Hash::make('admin123'), // ⚠️ cámbialo en producción
            ]
        );
    }
}
