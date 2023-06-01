<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $continets = [
            ['id' => 1, 'name' => 'Europe'],
            ['id' => 2, 'name' => 'Asia'],
            ['id' => 3, 'name' => 'Africa'],
            ['id' => 4, 'name' => 'South America'],
            ['id' => 5, 'name' => 'North America']
        ];

        foreach ($continets as $continet) {
            Continent::factory()->create($continet)->each(function ($c) {
                $c->countries()->saveMany(Country::factory(10)->make());
            });
        }

        // generate fake Product data
        Product::factory(100)->create();
    }
}
