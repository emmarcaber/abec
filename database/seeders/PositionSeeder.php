<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $executiveOfficers = [
            'Governor',
            'Vice Governor - Internal Affairs',
            'Vice Governor - External Affairs',
            'Secretary',
            'Chief Finance Officer',
            'Deputy Finance Officer',
            'Audit Commissioner',
            'Business Manager',
            'Public Relations Officer',
            'Cultural Coordinator',
            'Sports Coordinator',
            'Deputy Ethical Standards Officer',
            'Board of Directors',
        ];

        foreach ($executiveOfficers as $eo) {
            Position::query()->firstOrCreate([
                'officer_type' => 'executive',
                'position' => $eo,
            ]);
        }

        $committeeOfficers = [
            'Assistant Secretary',
            'Assistant Finance Officer',
            'Ways and Means Committee',
            'Program Representative',
            'Technical Team Committee',
        ];

        foreach ($committeeOfficers as $co) {
            Position::query()->firstOrCreate([
                'officer_type' => 'committee',
                'position' => $co,
            ]);
        }
    }
}
