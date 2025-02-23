<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('adminpassword'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Superviseur User',
            'email' => 'supervisor@gmail.com',
            'password' => Hash::make('supervisorpassword'),
            'role' => 'superviseur',
        ]);

        User::create([
            'name' => 'Confirmateur User',
            'email' => 'confirmateur@gmail.com',
            'password' => Hash::make('confirmateurpassword'),
            'role' => 'confirmateur',
        ]);

        User::create([
            'name' => 'Agent User',
            'email' => 'agent@gmail.com',
            'password' => Hash::make('agentpassword'),
            'role' => 'agent',
        ]);

        User::create([
            'name' => 'Clinique User',
            'email' => 'clinique@gmail.com',
            'password' => Hash::make('cliniquepassword'),
            'role' => 'clinique',
        ]);

        User::create([
            'name' => 'Patient User',
            'email' => 'patient@gmail.com',
            'password' => Hash::make('patientpassword'),
            'role' => 'patient',
        ]);
    }
}
