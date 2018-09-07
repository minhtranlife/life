<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThongTinTapHuanController extends Controller
{
    public function index(){
        return view('news.thongtintaphuan.index')
            ->with('pageTitle','Thông tin tập huấn');
    }
}
