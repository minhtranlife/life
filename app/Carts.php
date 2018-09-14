<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    protected $table = 'carts';
    protected $fillable = [
        'id',
        'ipguest',
        'status',
        'madh',
        'email',
        'name',
        'tel',
        'ghichu',
    ];
}
