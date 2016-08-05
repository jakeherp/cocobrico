<?php

use Illuminate\Database\Seeder;

use App\PalletCategory;
use App\Price;

class DefaultPricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PalletCategory::truncate();
        Price::truncate();

        $pallet_categories = [
        	['id' => 1, 'weight' => 1, 'unitsperbox' => 35, 'boxesperpallet' => 20 ],
        	['id' => 2, 'weight' => 3, 'unitsperbox' => 48, 'boxesperpallet' => 5 ],
        	['id' => 3, 'weight' => 10, 'unitsperbox' => 1, 'boxesperpallet' => 70 ]
        ];

        foreach($pallet_categories as $category){
            PalletCategory::create($category);
        }

        $prices = [
        	['id' => 1, 'name' => 'Standard Pallet 1', 'description' => 'Standard price per kg for pallets with weight 1kg, 35 units per box and 20 boxes per pallet.', 'standard' => 1, 'type' => 0, 'category_id' => 1, 'price_per_kg' => 2.0],
        	['id' => 2, 'name' => 'Standard Pallet 2', 'description' => 'Standard price per kg for pallets with weight 3kg, 48 units per box and 5 boxes per pallet.', 'standard' => 1, 'type' => 0, 'category_id' => 2, 'price_per_kg' => 1.9],
        	['id' => 3, 'name' => 'Standard Pallet 3', 'description' => 'Standard price per kg for pallets with weight 10kg, 1 unit per box and 70 boxes per pallet.', 'standard' => 1, 'type' => 0, 'category_id' => 3, 'price_per_kg' => 1.7]
        ];

        foreach($prices as $price){
            Price::create($price);
        }
    }
}
