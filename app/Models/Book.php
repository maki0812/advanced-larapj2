<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded = [ //指定したカラムは書き換え不可
        'id'
    ];

    protected $fillable = [
    'uuid', 'name', 'price'
    ];
}
