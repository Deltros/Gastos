<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'movement_type_id',
        'payment_method_id',
        'category_id',
        'amount',
        'currency',
        'description',
        'date',
        'is_installments',
        'installments_count',
        'installment_amount',
    ];

    protected $casts = [
        'date' => 'date',
        'is_installments' => 'boolean',
        'amount' => 'decimal:2',
        'installment_amount' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function movementType()
    {
        return $this->belongsTo(MovementType::class);
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function installments()
    {
        return $this->hasMany(MovementInstallment::class);
    }
}
