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
            'Public Relations Officers',
            'Cultural Coordinator',
            'Sports Coordinator',
            'Deputy Ethical Standard Officers',
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
            'Ways and Means Commitee',
            'Program Representative',
            'Technical Team Commiteee',
        ];

        foreach ($committeeOfficers as $co) {
            Position::query()->firstOrCreate([
                'officer_type' => 'committee',
                'position' => $co,
            ]);
        }
    }
}
