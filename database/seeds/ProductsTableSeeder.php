<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Product::create([
            'name'=>'Shoma',
            'category_id'=>1,
            'price'=>20.00,
        ]);
    }
}
