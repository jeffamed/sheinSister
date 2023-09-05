<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class OrderDetails extends Model
{
    use HasFactory;

    public $guarded = [];

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
