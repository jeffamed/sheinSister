<?php

namespace App\Services;

use App\Models\OrderDetails;

class OrderDetailsService
{
    public function create(array $payload): OrderDetails
    {
        return OrderDetails::create($payload);
    }
}
