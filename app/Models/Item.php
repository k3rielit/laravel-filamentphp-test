<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Item extends Model {

    protected $table = 'items';

    protected $fillable = [
        'name',
        'condition',
        'color'
    ];

    protected $attributes = [
        'name' => 'unspecified',
        'condition' => 'unknown',
    ];

    public function orders(): BelongsToMany {
        return $this->belongsToMany(Order::class, 'item_order');
    }

}
