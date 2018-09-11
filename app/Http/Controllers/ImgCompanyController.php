<?php

namespace App\Http\Controllers;

use App\ImgCompany;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ImgCompanyController extends Controller
{
    public function index(){
        $itemsPerPage = 6;
        $model = ImgCompany::paginate($itemsPerPage);
        return view('company.imgcompany.index')
            ->with('model',$model)
            ->with('pageTitle','Một số hình ảnh hoạt động của công ty');
    }

    public function create(){
        if (Session::has('admin') && session('admin')->level == 'Administrator') {
            return view('company.imgcompany.create')
                ->with('pageTitle','Thêm mới thông tin hoạt động công ty');
        }
        return view('errors.notlogin');
    }

    public function store(Request $request){
        if (Session::has('admin') && session('admin')->level == 'Administrator') {
            $inputs = $request->all();
            $model = new ImgCompany();
            if (isset($inputs['img'])) {
                $ipf1 = $request->file('img');
                $inputs['img'] = changeNameFile($ipf1->getClientOriginalName());
                $ipf1->move(public_path() . '/images/imgcompany', $inputs['img']);
            }else{
                $inputs['img'] = 'moimage.png';
            }
            $model->create($inputs);
            return redirect('imgcompany');
        }
        return view('errors.notlogin');
    }

    public function edit($id){
        if (Session::has('admin') && session('admin')->level == 'Administrator') {
            $model = ImgCompany::findOrFail($id);
            return view('company.imgcompany.edit')
                ->with('model',$model)
                ->with('pageTitle','Chỉnh sửa thông tin hoạt động công ty');
        }
        return view('errors.notlogin');
    }

    public function update(Request $request,$id){
        if (Session::has('admin') && session('admin')->level == 'Administrator') {
            $inputs = $request->all();
            $model = ImgCompany::findOrFail($id);
            if (isset($inputs['img'])) {
                $ipf1 = $request->file('img');
                $inputs['img'] = changeNameFile($ipf1->getClientOriginalName());
                $ipf1->move(public_path() . '/images/imgcompany', $inputs['img']);
            }
            $model->update($inputs);
            return redirect('imgcompany');
        }
        return view('errors.notlogin');
    }
}
