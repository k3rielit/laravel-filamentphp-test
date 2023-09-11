<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Database\Factories\OrderFactory;

class Order extends Model {

    use HasFactory;

    protected static function newFactory(): Factory {
        return OrderFactory::new();
    }

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


    public function status(): BelongsTo {
        return $this->belongsTo(Status::class, 'status_id', 'id');
    }

    public function items(): BelongsToMany {
        return $this->belongsToMany(Item::class, 'item_order');
    }

}
