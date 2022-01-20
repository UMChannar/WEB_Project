<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    protected $table = "pizzas";
    protected $fillable = [
        'name',
        'pizza',
        'topping1',
        'topping2',
        'topping3',
        'status',
    ];
}
