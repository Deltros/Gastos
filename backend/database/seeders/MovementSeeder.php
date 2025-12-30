<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movement;

class MovementSeeder extends Seeder
{
    public function run(): void
    {
        $movements = [
            // 1: Sueldo
            [
                'id' => 1,
                'user_id' => 1,
                'movement_type_id' => 1, // income
                'payment_method_id' => 4, // bank_transfer
                'category_id' => 1, // salary
                'amount' => 70000.00,
                'currency' => 'CLP',
                'description' => 'Monthly salary',
                'date' => '2025-03-01',
                'is_installments' => false,
                'installments_count' => null,
                'installment_amount' => null,
            ],
            // 2: Ingreso freelance
            [
                'id' => 2,
                'user_id' => 1,
                'movement_type_id' => 1, // income
                'payment_method_id' => 4, // bank_transfer
                'category_id' => 2, // freelance
                'amount' => 20000.00,
                'currency' => 'CLP',
                'description' => 'Freelance job',
                'date' => '2025-03-10',
                'is_installments' => false,
                'installments_count' => null,
                'installment_amount' => null,
            ],
            // 3: Groceries (debit card)
            [
                'id' => 3,
                'user_id' => 1,
                'movement_type_id' => 2, // expense
                'payment_method_id' => 2, // debit_card
                'category_id' => 3, // groceries
                'amount' => 8000.00,
                'currency' => 'CLP',
                'description' => 'Supermarket',
                'date' => '2025-03-02',
                'is_installments' => false,
                'installments_count' => null,
                'installment_amount' => null,
            ],
            // 4: Transport (cash)
            [
                'id' => 4,
                'user_id' => 1,
                'movement_type_id' => 2, // expense
                'payment_method_id' => 1, // cash
                'category_id' => 6, // transport
                'amount' => 6000.00,
                'currency' => 'CLP',
                'description' => 'Public transport',
                'date' => '2025-03-03',
                'is_installments' => false,
                'installments_count' => null,
                'installment_amount' => null,
            ],
            // 5: Rent (bank transfer)
            [
                'id' => 5,
                'user_id' => 1,
                'movement_type_id' => 2, // expense
                'payment_method_id' => 4, // bank_transfer
                'category_id' => 4, // rent
                'amount' => 15000.00,
                'currency' => 'CLP',
                'description' => 'Rent',
                'date' => '2025-03-04',
                'is_installments' => false,
                'installments_count' => null,
                'installment_amount' => null,
            ],
            // 6: Entertainment (debit)
            [
                'id' => 6,
                'user_id' => 1,
                'movement_type_id' => 2, // expense
                'payment_method_id' => 2, // debit_card
                'category_id' => 5, // entertainment
                'amount' => 5000.00,
                'currency' => 'CLP',
                'description' => 'Cinema',
                'date' => '2025-03-06',
                'is_installments' => false,
                'installments_count' => null,
                'installment_amount' => null,
            ],
            // 7: Savings (bank transfer)
            [
                'id' => 7,
                'user_id' => 1,
                'movement_type_id' => 2, // expense
                'payment_method_id' => 4, // bank_transfer
                'category_id' => 7, // savings
                'amount' => 7000.00,
                'currency' => 'CLP',
                'description' => 'Monthly savings',
                'date' => '2025-03-07',
                'is_installments' => false,
                'installments_count' => null,
                'installment_amount' => null,
            ],
            // 8: Credit card, 1 cuota (pago completo)
            [
                'id' => 8,
                'user_id' => 1,
                'movement_type_id' => 2, // expense
                'payment_method_id' => 3, // credit_card
                'category_id' => 8, // other
                'amount' => 4000.00,
                'currency' => 'CLP',
                'description' => 'Online purchase (one-shot credit)',
                'date' => '2025-03-08',
                'is_installments' => false,
                'installments_count' => null,
                'installment_amount' => null,
            ],
            // 9: BIG purchase, credit card, 10 cuotas
            [
                'id' => 9,
                'user_id' => 1,
                'movement_type_id' => 2, // expense
                'payment_method_id' => 3, // credit_card
                'category_id' => 8, // other
                'amount' => 100000.00,
                'currency' => 'CLP',
                'description' => 'Laptop in 10 installments',
                'date' => '2025-03-09',
                'is_installments' => true,
                'installments_count' => 10,
                'installment_amount' => 10000.00,
            ],
            // 10: Another groceries (debit)
            [
                'id' => 10,
                'user_id' => 1,
                'movement_type_id' => 2, // expense
                'payment_method_id' => 2, // debit_card
                'category_id' => 3, // groceries
                'amount' => 10000.00,
                'currency' => 'CLP',
                'description' => 'Groceries for the week',
                'date' => '2025-03-12',
                'is_installments' => false,
                'installments_count' => null,
                'installment_amount' => null,
            ],
        ];

        foreach ($movements as $movement) {
            Movement::create($movement);
        }
    }
}
