<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MovementInstallment;

class MovementInstallmentSeeder extends Seeder
{
    public function run(): void
    {
        $installments = [
            ['id' => 1, 'movement_id' => 9, 'installment_number' => 1, 'due_date' => '2025-03-31', 'amount' => 10000.00, 'is_paid' => false],
            ['id' => 2, 'movement_id' => 9, 'installment_number' => 2, 'due_date' => '2025-04-30', 'amount' => 10000.00, 'is_paid' => false],
            ['id' => 3, 'movement_id' => 9, 'installment_number' => 3, 'due_date' => '2025-05-31', 'amount' => 10000.00, 'is_paid' => false],
            ['id' => 4, 'movement_id' => 9, 'installment_number' => 4, 'due_date' => '2025-06-30', 'amount' => 10000.00, 'is_paid' => false],
            ['id' => 5, 'movement_id' => 9, 'installment_number' => 5, 'due_date' => '2025-07-31', 'amount' => 10000.00, 'is_paid' => false],
            ['id' => 6, 'movement_id' => 9, 'installment_number' => 6, 'due_date' => '2025-08-31', 'amount' => 10000.00, 'is_paid' => false],
            ['id' => 7, 'movement_id' => 9, 'installment_number' => 7, 'due_date' => '2025-09-30', 'amount' => 10000.00, 'is_paid' => false],
            ['id' => 8, 'movement_id' => 9, 'installment_number' => 8, 'due_date' => '2025-10-31', 'amount' => 10000.00, 'is_paid' => false],
            ['id' => 9, 'movement_id' => 9, 'installment_number' => 9, 'due_date' => '2025-11-30', 'amount' => 10000.00, 'is_paid' => false],
            ['id' => 10, 'movement_id' => 9, 'installment_number' => 10, 'due_date' => '2025-12-31', 'amount' => 10000.00, 'is_paid' => false],
        ];

        foreach ($installments as $installment) {
            MovementInstallment::create($installment);
        }
    }
}
