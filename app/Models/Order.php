<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {

    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'product_name',
        'quantity',
        'status_id'
    ];

    protected $attributes = [
        'product_name' => 'unspecified',
        'quantity' => 0,
    ];

}
