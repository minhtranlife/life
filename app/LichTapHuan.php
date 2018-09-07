<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichTapHuan extends Model
{

    protected $table = 'user';
    protected $fillable = [
        'id',
        'level',
        'diadanh',
        'tungay',
        'denngay',
        'sldv',
        'tensp',
        'avatar',
    ];
}
