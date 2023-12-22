<?php

namespace Database\Seeders;

use App\Models\PaymentMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paymentMethods = [
            [
                'name' => 'Transfer Bank',
            ],
            [
                'name' => 'E-Wallet',
            ],
        ];

        DB::table('payment_methods')->insert($paymentMethods);

        $paymentProviders = [
            [
                'name' => 'BCA',
                'image' => 'https://buatlogoonline.com/wp-content/uploads/2022/10/Logo-Bank-BCA-1.png',
                'payment_method_id' => 1,
            ],
            [
                'name' => 'BNI',
                'image' => 'https://upload.wikimedia.org/wikipedia/id/thumb/5/55/BNI_logo.svg/2560px-BNI_logo.svg.png',
                'payment_method_id' => 1,
            ],
            [
                'name' => 'OVO',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Logo_ovo_purple.svg/2560px-Logo_ovo_purple.svg.png',
                'payment_method_id' => 2,
            ],
            [
                'name' => 'GoPay',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Gopay_logo.svg/1200px-Gopay_logo.svg.png',
                'payment_method_id' => 2,
            ],
        ];

        DB::table('payment_providers')->insert($paymentProviders);
    }
}
