<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model {
    
    protected $table = 'statuses';

    protected $fillable = [
        'name',
        'is_active'
    ];

    protected $attributes = [
        'name' => 'unspecified',
        'is_active' => false,
    ];

}
