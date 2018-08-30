<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DmSanPham extends Model
{
    protected $table = 'dmsanpham';
    protected $fillable = [
        'id',
        'nhomsp',
        'tensp',
        'gioithieusp',
        'tinhnangsp',
        'capnhatsp',
        'avatar',
    ];
}
