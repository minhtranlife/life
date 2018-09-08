<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ViTriTuyenDung extends Model
{
    protected $table = 'vitrituyendung';
    protected $fillable = [
        'id',
        'vitri',
        'soluong',
        'hannophs',
        'mota',
        'yeucau',
        'quyenloi',
    ];
}
