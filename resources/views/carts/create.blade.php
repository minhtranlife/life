@extends('main')

@section('custom-style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
    <!--Date-->
    <link type="text/css" rel="stylesheet" href="{{ url('vendors/bootstrap-datepicker/css/datepicker.css') }}">
    <!--End Date-->
@stop


@section('custom-script')
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>


    <!-- END PAGE LEVEL PLUGINS -->
    <script src="{{url('assets/admin/pages/scripts/table-managed.js')}}"></script>

    <!--Date>
    <script type="text/javascript" src="{{ url('js/jquery-1.10.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ url('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ url('js/main.js') }}"></script>

    <End Date-->
    <!--Date new-->
    <!--script src="{{url('minhtran/jquery.min.js')}}"></script-->
    <script src="{{url('minhtran/jquery.inputmask.bundle.min.js')}}"></script>

    <script>
        $(document).ready(function(){
            $(":input").inputmask();
        });
    </script>


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
                            <!--form class="m-form m-form--fit m-form--label-align-right"-->
                                {!! Form::open(['url'=>'quanlydonhang', 'id' => 'create_quanlydonhang', 'class'=>'m-form m-form--fit m-form--label-align-right']) !!}
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Full Name
                                        </label>
                                        <div class="col-7">
                                            <input type="text" id="name" name="name" class="form-control required">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Email
                                        </label>
                                        <div class="col-7">
                                            <input type="email" class="form-control required" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Phone No.
                                        </label>
                                        <div class="col-7">
                                            <input type="number" class="form-control required" name="tel" id="tel" maxlength="11">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Ghi chú đơn hàng
                                        </label>
                                        <div class="col-7">
                                        <textarea id="ghichu" class="form-control" name="ghichu" cols="30" rows="10"
                                                  placeholder="Ghi chú đơn hàng"></textarea>
                                        </div>

                                    </div>
                                    <div class="m-portlet__foot m-portlet__foot--fit">
                                        <div class="m-form__actions">
                                            <div class="row">
                                                <div class="col-2"></div>
                                                <div class="col-7">
                                                    <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom" onclick="validateForm()">
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
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.script.create-header-scripts')
        <script type="text/javascript">
            function validateForm(){

                var validator = $("#create_quanlydonhang").validate({
                    rules: {
                        ten :"required"
                    },
                    messages: {
                        ten :"Chưa nhập dữ liệu"
                    }
                });
            }
        </script>



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