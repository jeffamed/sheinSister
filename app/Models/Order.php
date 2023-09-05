<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;

    public $guarded = [];

    public function orderDetails(): BelongsToMany
    {
        return $this->belongsToMany(OrderDetails::class);
    }
}
