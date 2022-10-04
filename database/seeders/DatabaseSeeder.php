<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Brand;
use App\Models\Place;
use App\Models\Vechile;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // Users
        User::factory(10)->create();

        // Brands
        Brand::create(['name'=>'Toyota']);
        Brand::create(['name'=>'Mazda']);
        Brand::create(['name'=>'Mercy']);
        Brand::create(['name'=>'BMW']);

        // Places
        Place::create(['name'=>'Jakarta']);
        Place::create(['name'=>'Bandung']);
        Place::create(['name'=>'Bogor']);
        Place::create(['name'=>'Bali']);
        Place::create(['name'=>'Surabaya']);
        Place::create(['name'=>'Malang']);
        Place::create(['name'=>'Jogja']);

        // Vechile
        Vechile::create([
            'name'=>'Mercy 1',
            'number_plate'=>'B2020JKT',
            'brand_id'=>'3',
            'type'=>'Normal'
        ]);
        Vechile::create([
            'name'=>'Mercy 2',
            'number_plate'=>'B2021JKT',
            'brand_id'=>'3',
            'type'=>'Normal'
        ]);
        Vechile::create([
            'name'=>'Mercy 3',
            'number_plate'=>'B2022JKT',
            'brand_id'=>'3',
            'type'=>'Normal'
        ]);
    }
}
