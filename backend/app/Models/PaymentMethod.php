<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'is_credit'];

    protected $casts = [
        'is_credit' => 'boolean',
    ];

    public function movements()
    {
        return $this->hasMany(Movement::class);
    }
}
