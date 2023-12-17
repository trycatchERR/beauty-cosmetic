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
                "description" => 'Palet eyeshadow dengan 9 warna yang pigmented, mudah dibaurkan, dan tahan lama.',
            ],
            [
                "name" => "HOOMAN UNDER CONTROL HD Blur Loose Powder",
                "price" => 142000,
                "image" => "images/makeup.png",
                "description" => 'Bedak tabur yang mengandung 2% Niacinamide & 1% Zinc PCA untuk mengontrol minyak berlebih & menutup pori-pori.',
            ],
            [
                "name" => "Calm Down! Skinpair Bubble Cleanser",
                "price" => 109000,
                "image" => "images/skincare3.png",
                "description" => 'Cleanser dengan busa lembut yang membersihkan kotoran & sisa makeup tanpa membuat kulit kering.',
            ],
            [
                "name" => "ACNE SHOT AC Overnight Treatment Spot Cream",
                "price" => 93500,
                "image" => "images/skincare1.png",
                "description" => 'Krim malam untuk mengatasi jerawat yang mengandung 2% Niacinamide, 1% Zinc PCA, dan 4% Alpha Arbutin.',
            ],
            [
                "name" => "Holyshield! UV Watery Sunscreen Gel SPF 50+ PA++++",
                "price" => 53900,
                "image" => "images/product4.png",
                "description" => 'Gel Tabir Surya dengan SPF 50+ PA++++ & teknologi Encapsulated UV Filter yang memberikan perlindungan maksimal dari sinar UVA & UVB.',
            ],
            [
                "name" => "5% Mandelic Acid Mild Exfoliating Serum",
                "price" => 131000,
                "image" => "images/serum1.png",
                "description" => 'Serum dengan 5% Mandelic Acid yang dapat mengangkat sel kulit mati, mengurangi noda hitam, dan mencerahkan kulit.',
            ],
            [
                "name" => "pH Restore Hair Rinsing Vinegar",
                "price" => 149000,
                "image" => "images/skincare7.png",
                "description" => 'Cuka rambut khusus yang menetralkan & menyeimbangkan tingkat pH untuk mencegah ketombe, gatal dan rambut rontok.',
            ],
            [
                "name" => "Lipvocado Vegan Lip Treatment Tint",
                "price" => 87000,
                "image" => "images/product51.png",
                "description" => '100% lip balm vegan berwarna dengan hasil akhir noda alami, diresapi dengan Avocado Oil & Hyaluronic Acid untuk melembabkan & mengurangi garis-garis halus pada bibir. ',
            ],
        ];
        DB::table('products')->insert($products);
    }
}
