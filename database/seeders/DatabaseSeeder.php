<?php

namespace Database\Seeders;

use App\Models\ArrivalMean;
use App\Models\Disembarkation;
use App\Models\FormArriving;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        ArrivalMean::factory()->create([
            'arrivingBY' => 'Airline',
            'type' => 1
        ]);
        ArrivalMean::factory()->create([
            'arrivingBY' => 'Cruise',
            'type' => 1
        ]);
        ArrivalMean::factory()->create([
            'arrivingBY' => 'Ferry',
            'type' => 1
        ]);
        ArrivalMean::factory()->create([
            'arrivingBY' => 'Private Plane',
            'type' => 1
        ]);
        ArrivalMean::factory()->create([
            'arrivingBY' => 'Yacht/Private Boat',
            'type' => 1
        ]);

        Disembarkation::create([
            'name' => 'Deep Water Habour'
        ]);
        Disembarkation::create([
            'name' => 'Grantly Adams International Airport'
        ]);
        Disembarkation::create([
            'name' => 'Carrits Cruise Ship Berth'
        ]);
        Disembarkation::create([
            'name' => 'Canefield Airport'
        ]);
        Disembarkation::create([
            'name' => 'Douglast Charles Airport'
        ]);
        Disembarkation::create([
            'name' => 'Roseau Cruise Ship Berth'
        ]);
        Disembarkation::create([
            'name' => 'Roseau Ferry Terminal'
        ]);
        Disembarkation::create([
            'name' => 'Woodbridge Bay Port'
        ]);
        Disembarkation::create([
            'name' => 'Maurice Bishop International Airport'
        ]);
        Disembarkation::create([
            'name' => 'St George\'s Port'
        ]);
        Disembarkation::create([
            'name' => 'Deep Water Port'
        ]);
        Disembarkation::create([
            'name' => 'Robert L Bradshaw International Airport'
        ]);
        Disembarkation::create([
            'name' => 'Vance W.Amory International Airport'
        ]);
        Disembarkation::create([
            'name' => 'George FL Charles Airport'
        ]);
        Disembarkation::create([
            'name' => 'Marigot Bay'
        ]);
        Disembarkation::create([
            'name' => 'Port Castries'
        ]);
        Disembarkation::create([
            'name' => 'Radney Bay'
        ]);
        Disembarkation::create([
            'name' => 'Soulfriere'
        ]);
        Disembarkation::create([
            'name' => 'Vieux Fort'
        ]);
        Disembarkation::create([
            'name' => 'Argyle International Airport'
        ]);
        Disembarkation::create([
            'name' => 'Port of Kingston'
        ]);
        FormArriving::factory(50)->create();
    }
}
