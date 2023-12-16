<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "name" => "SUPERSTAR Pocket Eyeshadow Palette",
                "price" => 131000,
                "image" => "images/product2.png",
                "description" => null,
            ],
            [
                "name" => "HOOMAN UNDER CONTROL HD Blur Loose Powder",
                "price" => 142000,
                "image" => "images/makeup.png",
                "description" => null,
            ],
            [
                "name" => "Holyshield! UV Watery Sunscreen Gel SPF 50+ PA++++",
                "price" => 53900,
                "image" => "images/product4.png",
                "description" => null,
            ],
            [
                "name" => "Calm Down! Skinpair Bubble Cleanser",
                "price" => 109000,
                "image" => "images/skincare3.png",
                "description" => null,
            ],
            [
                "name" => "Lipvocado Vegan Lip Treatment Tint",
                "price" => 87000,
                "image" => "images/product51.png",
                "description" => null,
            ],
            [
                "name" => "ACNE SHOT AC Overnight Treatment Spot Cream",
                "price" => 93500,
                "image" => "images/skincare1.png",
                "description" => null,
            ],
            [
                "name" => "pH Restore Hair Rinsing Vinegar",
                "price" => 149000,
                "image" => "images/skincare7.png",
                "description" => null,
            ],
            [
                "name" => "5% Mandelic Acid Mild Exfoliating Serum",
                "price" => 131000,
                "image" => "images/serum1.png",
                "description" => null,
            ],
        ];
        DB::table('products')->insert($products);
    }
}
