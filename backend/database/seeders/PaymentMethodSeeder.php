<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PaymentMethod;

class PaymentMethodSeeder extends Seeder
{
    public function run(): void
    {
        $methods = [
            ['id' => 1, 'name' => 'cash', 'is_credit' => false],
            ['id' => 2, 'name' => 'debit_card', 'is_credit' => false],
            ['id' => 3, 'name' => 'credit_card', 'is_credit' => true],
            ['id' => 4, 'name' => 'bank_transfer', 'is_credit' => false],
        ];

        foreach ($methods as $method) {
            PaymentMethod::create($method);
        }
    }
}
