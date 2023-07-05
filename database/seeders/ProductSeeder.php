<?php

namespace Database\Seeders;
use App\Models\Product;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Luxurious Watch',
            'slug' => 'luxurious-watch',
            'description' => '<ul><li><i class="icofont-check"></i> Crown Protector</li><li><i class="icofont-check"></i>Water Resistance</li><li><i class="icofont-check"></i>Movement Button</li><li><i class="icofont-check"></i>1 Year Guarantee</li>',
            'image_name' => 'watch-1.png',
            'price' => 250.00,
            'sale_price' => 120.00
        ]);

        Product::create([
            'name' => 'Pink Torex Watch',
            'slug' => 'pink-torex-watch',
            'description' => '<ul><li><i class="icofont-check"></i>Stainless Steel</li><li><i class="icofont-check"></i>High Quality Glass</li><li><i class="icofont-check"></i>3 Step Protection</li><li><i class="icofont-check"></i>2 Year Guarantee</li>',
            'image_name' => 'watch-2.png',
            'price' => 250.00,
            'sale_price' => 12.00
        ]);

        Product::create([
            'name' => 'New Yellow Watch',
            'slug' => 'new-yellow-watch',
            'description' => '<ul><li><i class="icofont-check"></i>2 Step Protection Glass</li><li><i class="icofont-check"></i>PVD Coating</li><li><i class="icofont-check"></i>Clear Super Glass</li><li><i class="icofont-check"></i>3 Year Guarantee</li>',
            'image_name' => 'watch-3.png',
            'price' => 390.00,
            'sale_price' => 250.00
        ]);

        Product::create([
            'name' => 'Brand New Black',
            'slug' => 'brand-new-black',
            'description' => '<ul><li><i class="icofont-check"></i>Lifetime Battery</li><li><i class="icofont-check"></i>Awesome Color</li><li><i class="icofont-check"></i>Water Resistance</li><li><i class="icofont-check"></i>1 Year Guarantee</li>',
            'image_name' => 'watch-4.png',
            'price' => 390.00,
            'sale_price' => 180.00
        ]);
    }
}
