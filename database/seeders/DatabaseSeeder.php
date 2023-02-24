<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Coche;
use App\Models\Marca;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Marca::truncate();
        Coche::truncate();


        $marcas = Marca::factory(10)->create();
        foreach ($marcas as $marca) {
            Coche::factory(10)->create([
                "marca_id" => $marca->id
            ]);
        }
    }
}
