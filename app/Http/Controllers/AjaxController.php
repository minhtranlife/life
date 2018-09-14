<?php

namespace App\Http\Controllers;

use App\Carts;
use App\CartsCt;
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


            $result['message'] = '<div class="m-list-timeline m-list-timeline--skin-light" id="ttcarts">
                                                                <div class="m-list-timeline__heading">
                                Tổng cộng:&nbsp;'.count($modelcarts).' sản phẩm
                                </div>';
            $result['message'] .= '<div class="m-list-timeline__items">';
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


        $result['message'] = '<div class="m-list-timeline m-list-timeline--skin-light" id="ttcarts">
                                                                <div class="m-list-timeline__heading">
                                Tổng cộng:&nbsp;'.count($modelcarts).' sản phẩm
                                </div>';
        $result['message'] .= '<div class="m-list-timeline__items">';
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
        $result['message'] .= ' </div>';

        $result['status'] = 'success';

        die(json_encode($result));
    }

    public function xoacarts(Request $request){
        $result = array(
            'status' => 'fail',
            'message' => 'error',
            'message1' => 'error',
        );
        $inputs = $request->all();

        $model = CartsCtDf::where('id',$inputs['id'])->first();
        $model->delete();
        $modelcarts = CartsCtDf::where('ipguest',$inputs['ipguest'])->get();

        $result['message'] = '<div class="form-group m-form__group row" id="donhangcarts">';
        $result['message'] .= '<table class="table" id="donhangcarts">';
        $result['message'] .= '<thead>
                                <tr>
                                    <th style="text-align: center" width="2%">STT</th>
                                    <th style="text-align: center">Nhóm sản phẩm</th>
                                    <th style="text-align: center">Tên sản phẩm</th>
                                    <th style="text-align: center">Thao tác</th>
                                </tr>
                                </thead>
                                <tbody>';
        if(count($modelcarts) > 0) {
            foreach ($modelcarts as $key=>$cart) {
                $result['message'] .= '<tr class="odd gradeX">';
                $result['message'] .= '<td style="text-align: center">'. ($key + 1) .'</td>';
                $result['message'] .= ' <td>'.$cart->nhomsp.'</td>';
                $result['message'] .= '<td class="active">'.$cart->tensp.'</td>';
                $result['message'] .= ' <td>
                                            <button type="button" class="btn btn-outline-danger" onclick="xoacarts('.$cart->id.')">
                                                Xóa
                                            </button>
                                        </td>';
                $result['message'] .= ' </tr>';
            }
        }else{
            $result['message'] .= ' <tr>
                                                <td colspan="4" style="text-align: center">Hiện chưa có thông tin sản phẩm trong giỏ hàng của bạn</td>
                                            </tr>';
        }
        $result['message'] .= ' </tbody>
                                </table>';
        $result['message'] .= '<lable><b> Tổng cộng:&nbsp;'.count($modelcarts).'&nbsp;sản phẩm</b></lable>';
        $result['message'] .= ' </div>';


        $result['message1'] = '<div class="m-list-timeline m-list-timeline--skin-light" id="ttcarts">
                                                                <div class="m-list-timeline__heading">
                                Tổng cộng:&nbsp;'.count($modelcarts).' sản phẩm
                                </div>';
        $result['message1'] .= '<div class="m-list-timeline__items">';
        foreach($modelcarts as $cart) {
            $result['message1'] .= '<div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                <span class="m-list-timeline__text">' . $cart->tensp . '</span>';
            $result['message1'] .= '<span class="m-list-timeline__time">
                                   <button type="button" class="btn m-btn--pill m-btn--air  btn-outline-brand btn-sm" onclick="delcarts(' . $cart->id . ')">
                                       Xóa
                                   </button>
                                </span>';
            $result['message1'] .= ' </div>';
        }
        $result['message1'] .= ' </div>';
        $result['message1'] .= ' </div>';

        $result['status'] = 'success';
//        dd($result['message']);

        die(json_encode($result));
    }

    public function showcartsct(Request $request){
        $result = array(
            'status' => 'fail',
            'message' => 'error',
        );
        $inputs = $request->all();
        $model = Carts::where('id',$inputs['id'])->first();

        $modelcarts = CartsCt::where('madh',$model->madh)->get();
        if(count($modelcarts)>0){

            $result['message'] = '<div class="m-portlet m-portlet--tab" id="ttctcarts">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">

                                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                                    <h3 class="m-portlet__head-text">
                                        Thông tin chi tiết  đơn hàng
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group">
                                <div class="alert m-alert m-alert--default" role="alert"> Ghi chú đơn hàng: '
                                 . nl2br(e($model->ghichu)).
                                '</div>
                            </div>
                            <div class="form-group m-form__group row">
                                <table class="table">
                                    <!--begin::Thead-->
                                    <thead>
                                    <tr>
                                        <th style="text-align: center" width="2%">STT</th>
                                        <th style="text-align: center" width="49%">Nhóm sản phẩm</th>
                                        <th style="text-align: center" width="49%">Tên sản phẩm</th>
                                    </tr>
                                    </thead>
                                    <tbody>';
            foreach($modelcarts as $key=>$cart) {
            $result['message'] .= '<tr>';
            $result['message'] .= '<td style="text-align: center">'.($key+1).'</td>';
            $result['message'] .= '<td style="text-align: center">'.$cart->nhomsp.'</td>';
            $result['message'] .= '<td style="text-align: left">'.$cart->tensp.'</td>';
            $result['message'] .= '</tr>';
            }
            $result['message'] .= '</tbody>
                                </table>';
            $result['message'] .= '<lable><b> Tổng cộng:&nbsp;'.count($modelcarts).'&nbsp;sản phẩm</b></lable>';
            $result['message'] .=' </div>
                        </div>
                    </div>';

            $result['status'] = 'success';
        }else{
            $result['message'] = 'Không tìm thấy chi tiết đơn hàng';
        }

        die(json_encode($result));
    }
}
