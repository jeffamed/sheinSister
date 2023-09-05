<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    public $guarded = [];

    public function orderDetails(): BelongsToMany
    {
        return $this->belongsToMany(OrderDetails::class);
    }
}
