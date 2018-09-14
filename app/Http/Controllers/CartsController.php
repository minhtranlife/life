<?php

namespace App\Http\Controllers;

use App\Carts;
use App\CartsCt;
use App\CartsCtDf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CartsController extends Controller
{
    public function index(Request $request){
        $inputs = $request->all();
        $inputs['status'] = isset($inputs['status']) ? $inputs['status'] : 'waiting';
        $inputs['ipguest'] = isset($inputs['ipguest']) ? $inputs['ipguest'] : $_SERVER['REMOTE_ADDR'];
        $model = Carts::where('status',$inputs['status']);
           if (Session::has('admin') && session('admin')->level == 'Administrator') {

           }else
               $model = $model->where('ipguest',$inputs['ipguest']);
        $model = $model->get();
        return view('carts.index')
            ->with('model',$model)
            ->with('status',$inputs['status'])
            ->with('pageTitle','Quản lý đơn hàng');
    }
    public function create(Request $request){
        $inputs = $request->all();
        $inputs['ipguest'] = isset($inputs['ipguest']) ? $inputs['ipguest'] : $_SERVER['REMOTE_ADDR'];
        $model = CartsCtDf::where('ipguest',$inputs['ipguest'])
            ->get();
        return view('carts.create')
            ->with('model',$model)
            ->with('pageTitle','Thông tin đơn hàng');
    }

    public function store(Request $request){
        $inputs = $request->all();
        $inputs['madh'] = 'LIFESOFT'.getdate()[0];
        $inputs['ipguest'] = isset($inputs['ipguest']) ? $inputs['ipguest'] : $_SERVER['REMOTE_ADDR'];
        $inputs['status'] = 'waiting';
        //dd($inputs);
        $modelctdf = CartsCtDf::where('ipguest',$inputs['ipguest'])
            ->get();
        if(count($modelctdf)>0){
            foreach($modelctdf as $ctdf){
                $modelct = new CartsCt();
                $modelct->madh = $inputs['madh'];
                $modelct->ipguest = $inputs['ipguest'];
                $modelct->idsp = $ctdf->idsp;
                $modelct->nhomsp = $ctdf->nhomsp;
                $modelct->tensp = $ctdf->tensp;
                $modelct->save();
            }
            $model = new Carts();
            $model->create($inputs);
            $modeldel = CartsCtDf::where('ipguest',$inputs['ipguest'])->delete();
            return redirect('quanlydonhang');
        }else
            dd('Đơn hàng ko có sản phẩm bạn cần chọn sản phẩm');

    }

    public function destroy(Request $request){

    }
}
