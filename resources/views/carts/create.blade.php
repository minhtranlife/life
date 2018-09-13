@extends('main')

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
    <!-- END THEME STYLES -->
@stop


@section('custom-script')
    <!-- BEGIN PAGE LEVEL PLUGINS -->

@stop

@section('content')
    <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <div class="m-content">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="m-portlet m-portlet--full-height">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                           Thông tin đơn hàng
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group row" id="donhangcarts">

                                    <table class="table" >
                                        <!--begin::Thead-->
                                        <thead>
                                        <tr>
                                            <th style="text-align: center" width="2%">STT</th>
                                            <th style="text-align: center">Nhóm sản phẩm</th>
                                            <th style="text-align: center">Tên sản phẩm</th>
                                            <th style="text-align: center">Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($model)>0)
                                            @foreach($model as $key=>$tt)
                                                <tr class="odd gradeX">
                                                    <td style="text-align: center">{{$key+1}}</td>
                                                    <td>{{$tt->nhomsp}}</td>
                                                    <td class="active" >{{$tt->tensp}}</td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-danger" onclick="xoacarts({{$tt->id}})">
                                                            Xóa
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="4" style="text-align: center">Hiện chưa có thông tin sản phẩm trong giỏ hàng của bạn</td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                    <lable><b> Tổng cộng:&nbsp;{{count($model)}}&nbsp;sản phẩm</b></lable>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="m-portlet m-portlet--full-height">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Thông tin khách hàng
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <!--end::Content-->
                            <form class="m-form m-form--fit m-form--label-align-right">
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Full Name
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Email
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Phone No.
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Ghi chú đơn hàng
                                        </label>
                                        <div class="col-7">
                                        <textarea id="gioithieusp" class="form-control" name="gioithieusp" cols="30" rows="10"
                                                  placeholder="Ghi chú đơn hàng"></textarea>
                                        </div>
                                    </div>
                                    <div class="m-portlet__foot m-portlet__foot--fit">
                                        <div class="m-form__actions">
                                            <div class="row">
                                                <div class="col-2"></div>
                                                <div class="col-7">
                                                    <button type="reset" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                                                        Tạo đơn hàng
                                                    </button>
                                                    &nbsp;&nbsp;
                                                    <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function xoacarts(id){
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: '/ajax/xoacarts',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    id: id,
                    ipguest: $('#ipguest').val()
                },
                dataType: 'JSON',
                success: function (data) {
                    if (data.status == 'success') {
                        $('#donhangcarts').replaceWith(data.message);
                        $('#ttcarts').replaceWith(data.message1);
                        toastr.success("Đã xóa sản phẩm trong giỏ hàng", "Thành công!");
                    }
                    else
                        toastr.error(data.message);
                }
            })
        }
    </script>
@stop