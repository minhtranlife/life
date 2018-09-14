<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartsCt extends Model
{
    protected $table = 'cartsct';
    protected $fillable = [
        'id',
        'ipguest',
        'madh',
        'idsp',
        'nhomsp',
        'tensp',
    ];
}
