<?php

namespace App\Services;

use App\Models\Movement;

class MovementService
{
    /**
     * Obtener todos los movimientos de un usuario
     */
    public function getMovementsByUserId(int $userId): \Illuminate\Database\Eloquent\Collection
    {
        return Movement::where('user_id', $userId)
            ->with(['movementType', 'paymentMethod', 'category', 'installments'])
            ->orderBy('date', 'desc')
            ->get();
    }
}
