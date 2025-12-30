<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovementInstallment extends Model
{
    use HasFactory;

    protected $fillable = [
        'movement_id',
        'installment_number',
        'due_date',
        'amount',
        'is_paid',
    ];

    protected $casts = [
        'due_date' => 'date',
        'is_paid' => 'boolean',
        'amount' => 'decimal:2',
    ];

    public function movement()
    {
        return $this->belongsTo(Movement::class);
    }
}
