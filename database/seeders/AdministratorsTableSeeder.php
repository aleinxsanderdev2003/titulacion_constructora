<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdministratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Crear un administrador
        Admin::create([
            'name' => 'N',
            'email' => 'admin@example.com',
            'password' => Hash::make('contraseña')
        ]);
    }
}
