<?php

namespace App\Http\Controllers;

use App\ViTriTuyenDung;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ViTriTuyenDungController extends Controller
{
    public function index(){
        $model = ViTriTuyenDung::all();
        return view('tuyendung.vitri')
            ->with('model',$model)
            ->with('pageTitle','Thông tin tuyển dụng');

    }

    public function create(){
        if (Session::has('admin') && session('admin')->level == 'Administrator') {
            return view('tuyendung.create')
                ->with('pageTitle','Thêm mới thông tin tuyendung');
        }
        return view('errors.notlogin');
    }

    public function store(Request $request){
        if (Session::has('admin') && session('admin')->level == 'Administrator') {
            $inputs = $request->all();
            $model = new ViTriTuyenDung();
            $model->create($inputs);
            return redirect('vitrituyendung');

        }
        return view('errors.notlogin');
    }

    public function show($id){
        $model = ViTriTuyenDung::findOrFail($id);
        return view('tuyendung.show')
            ->with('model',$model)
            ->with('pageTitle','Tuyển dụng nhân viên');
    }

    public function edit($id){
        if (Session::has('admin') && session('admin')->level == 'Administrator') {
            $model = ViTriTuyenDung::findOrFail($id);
            return view('tuyendung.edit')
                ->with('model',$model)
                ->with('pageTitle','Chỉnh sửa thông tin tuyển dụng');

        }
        return view('errors.notlogin');
    }

    public function update(Request $request,$id){
        if (Session::has('admin') && session('admin')->level == 'Administrator') {
            $inputs = $request->all();
            $model = ViTriTuyenDung::findOrFail($id);
            $model->update($inputs);
            return redirect('vitrituyendung');

        }
        return view('errors.notlogin');
    }

}
