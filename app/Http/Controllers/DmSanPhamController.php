<?php

namespace App\Http\Controllers;

use App\DmSanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DmSanPhamController extends Controller
{
    public function index(Request $request){
        $inputs = $request->all();
        $inputs['id'] = isset($inputs['id']) ? $inputs['id'] : '1';
        $model = DmSanPham::where('id',$inputs['id'])
            ->first();
        $modellq = DmSanPham::where('nhomsp',$model->nhomsp)->get();
        return view('sanpham.index')
            ->with('model',$model)
            ->with('modellq',$modellq)
            ->with('pageTitle','Thông tin sản phẩm');
    }
}
