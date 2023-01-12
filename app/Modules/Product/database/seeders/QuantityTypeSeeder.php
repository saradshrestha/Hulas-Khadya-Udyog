<?php

namespace Product\database\seeders;

use Illuminate\Database\Seeder;
use Product\Models\QuantityType;

class QuantityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuantityType::create([
            'title'=>'KG'
        ]);
        QuantityType::create([
            'title' => 'Dharni'
        ]);
        QuantityType::create([
            'title' => 'Litre'
        ]);
        QuantityType::create([
            'title' => 'Gram'
        ]);
    }
}
