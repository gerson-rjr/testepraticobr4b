<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstName' => 'Gerson',
            'lastName' => 'Rosa',
            'email' => 'gerson@gerson.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
