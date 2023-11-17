<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Employer::factory()->create([
            'prenom' => 'youssef',
            'nome' => 'motahhir',
            'prenomAr' => 'يوسف',
            'nomeAr' => 'مطهر',
            'tele' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'role' => 'admin',
            'adresse' => fake()->address(),
            'group' => 'A',
            'dateEnbouch' => fake()->date(),
            'dateNaissance' => fake()->date(),
            'genre' => 'ذكر',
            'grade' => 'grade1',
            'bureau' => '51',
            'echelle' => 'echelle1',
            'statu' => '1',
            'createBy' => 'yoyo',
            'updateBy' => 'yoyo',
            'statu' => '1',
        ]);

        // \App\Models\User::factory(1)->create();

        \App\Models\User::factory()->create([
            'id' =>'1',
            'name' => 'motahhir',
            'prename' => 'youssef',
            'username' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'), // password
        ]);
    }
}
