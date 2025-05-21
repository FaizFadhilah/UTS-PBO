<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = [
        'customer_id',
        'amount',
        'payment_method',
        'date',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
