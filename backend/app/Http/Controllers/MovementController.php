<?php

namespace App\Http\Controllers;

use App\Services\MovementService;
use Illuminate\Http\Request;

class MovementController extends Controller
{
    protected MovementService $movementService;

    public function __construct(MovementService $movementService)
    {
        $this->movementService = $movementService;
    }

    /**
     * Obtener todos los movimientos del usuario autenticado
     */
    public function index(Request $request)
    {
        $movements = $this->movementService->getMovementsByUserId($request->user()->id);

        return response()->json([
            'movements' => $movements,
        ]);
    }
}
