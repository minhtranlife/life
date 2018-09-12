<?php

namespace App\Http\Controllers;

use App\CartsCtDf;
use App\DmSanPham;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjaxController extends Controller
{
    public function carts(Request $request){
        $result = array(
            'status' => 'fail',
            'message' => 'error',
        );
        $inputs = $request->all();
        $check = CartsCtDf::where('ipguest',$inputs['ipguest'])
            ->where('idsp',$inputs['idsp'])
            ->count();
        if($check == 0){
            $modelsp = DmSanPham::where('id',$inputs['idsp'])->first();
            $model = new CartsCtDf();
            $inputs['nhomsp'] = $modelsp->nhomsp;
            $inputs['tensp'] = $modelsp->tensp;
            $model->create($inputs);
            $modelcarts = CartsCtDf::where('ipguest',$inputs['ipguest'])->get();


            $result['message'] = '<div class="m-list-timeline__items" id="ttcarts">';
            foreach($modelcarts as $cart) {
                $result['message'] .= '<div class="m-list-timeline__item">
                                    <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                    <span class="m-list-timeline__text">' . $cart->tensp . '</span>';
                $result['message'] .= '<span class="m-list-timeline__time">
                                       <button type="button" class="btn m-btn--pill m-btn--air  btn-outline-brand btn-sm" onclick="delcarts(' . $cart->id . ')">
                                           Xóa
                                       </button>
                                    </span>';
                $result['message'] .= ' </div>';
            }
            $result['message'] .= ' </div>';

            $result['status'] = 'success';
        }else{
            $result['message'] = 'Sản phẩm đã được chọn vui lòng chọn sản phẩm khác';
        }

        die(json_encode($result));
    }

    public function delcarts(Request $request){
        $result = array(
            'status' => 'fail',
            'message' => 'error',
        );
        $inputs = $request->all();

        $model = CartsCtDf::where('id',$inputs['id'])->first();
        $model->delete();
        $modelcarts = CartsCtDf::where('ipguest',$inputs['ipguest'])->get();


        $result['message'] = '<div class="m-list-timeline__items" id="ttcarts">';
        foreach($modelcarts as $cart) {
            $result['message'] .= '<div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                <span class="m-list-timeline__text">' . $cart->tensp . '</span>';
            $result['message'] .= '<span class="m-list-timeline__time">
                                   <button type="button" class="btn m-btn--pill m-btn--air  btn-outline-brand btn-sm" onclick="delcarts(' . $cart->id . ')">
                                       Xóa
                                   </button>
                                </span>';
            $result['message'] .= ' </div>';
        }
        $result['message'] .= ' </div>';

        $result['status'] = 'success';

        die(json_encode($result));
    }
}
