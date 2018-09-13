<?php

namespace App\Http\Controllers;

use App\CartsCtDf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartsController extends Controller
{
    public function index(Request $request){
        $inputs = $request->all();
        $inputs['ipguest'] = isset($inputs['ipguest']) ? $inputs['ipguest'] : $_SERVER['REMOTE_ADDR'];
        $model = CartsCtDf::where('ipguest',$inputs['ipguest'])
            ->get();
        return view('carts.create')
            ->with('model',$model)
            ->with('pageTitle','Thông tin đơn hàng');
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
}
