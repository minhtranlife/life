<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartsCtDf extends Model
{
    protected $table = 'cartsctdf';
    protected $fillable = [
        'id',
        'ipguest',
        'idsp',
        'nhomsp',
        'tensp',
    ];
}
