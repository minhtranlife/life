<?php

namespace App\Http\Controllers;

use App\DmSanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

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

    public function create(){
        if (Session::has('admin') && session('admin')->level == 'Administrator') {
            return view('sanpham.create')
                ->with('pageTitle','Thêm mới thông tin sản phẩm');
        }
        return view('errors.notlogin');
    }

    public function store(Request $request){
        if (Session::has('admin') && session('admin')->level == 'Administrator') {
            $inputs = $request->all();
            $model = new DmSanPham();
            if (isset($inputs['avatar'])) {
                $ipf1 = $request->file('avatar');
                $inputs['avatar'] = $id . changeNameFile($ipf1->getClientOriginalName());
                $ipf1->move(public_path() . '/images/sanpham', $inputs['avatar']);
            }
            $model->create($inputs);
            $idmax = DmSanPham::max('id');
            return redirect('sanpham?&id=' . $idmax);
        }
        return view('errors.notlogin');
    }

    public function edit($id){
        $model = DmSanPham::findOrFail($id);
        return view('sanpham.edit')
            ->with('model',$model)
            ->with('pageTitle','Chỉnh sửa thông tin sản phẩm');
    }

    public function update(Request $request, $id){
        $inputs = $request->all();
        $model = DmSanPham::findOrFail($id);
        if(isset($inputs['avatar'])){
            $ipf1 = $request->file('avatar');
            $inputs['avatar'] = $id.changeNameFile($ipf1->getClientOriginalName());
            $ipf1->move(public_path().'/images/sanpham',$inputs['avatar']);
        }
        $model->update($inputs);
        return redirect('sanpham?&id='.$id);
    }
}
