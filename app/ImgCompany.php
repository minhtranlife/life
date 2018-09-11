<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImgCompany extends Model
{
    protected $table = 'imgcompany';
    protected $fillable = [
        'id',
        'img',
        'mota',
        'chitiet',
    ];
}
