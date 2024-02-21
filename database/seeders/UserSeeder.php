<?php

namespace Database\Seeders;

use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Angel Bianca Nacario',
            'username' => 'aben',
            'password' => Hash::make('#IRIga2001'),
            'role' => 'admin',
            'position_id' => Position::query()->where('position', 'Deputy Ethical Standards Officer')->first()->id,
        ]);
    }
}
