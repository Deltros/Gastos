<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MovementType;

class MovementTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            ['id' => 1, 'name' => 'income'],
            ['id' => 2, 'name' => 'expense'],
        ];

        foreach ($types as $type) {
            MovementType::create($type);
        }
    }
}
