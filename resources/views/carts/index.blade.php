@extends('main')

@section('custom-style')

@stop


@section('custom-script')

@stop

@section('content')
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="row">
                <div class="col-md-8">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                                    <h3 class="m-portlet__head-text">
                                        Thông tin quản lý đơn hàng
                                    </h3>
                                </div>
                            </div>
                        </div>
                            <div class="m-portlet__body">
                                @if($status != 'success')
                                <div class="form-group m-form__group">
                                    <div class="alert m-alert m-alert--default" role="alert">
                                      Thông tin đơn hàng của quý khách đã được công ty tiếp nhận, nhân viên kinh doanh sẽ liên lạc với quý khách.
                                      Mọi vấn đề khúc mắc xin liên hệ với <a href class="m_link">Mr.Nguyễn Văn Nam</a>- Trưởng phòng kinh doanh - <a href class="m_link">Tel: 098 3886323</a>

                                    </div>
                                </div>
                                @endif
                                <div class="form-group m-form__group">
                                    <div class="col-md-6">
                                    <label for="exampleSelect1">
                                       Trạng thái đơn hàng
                                    </label>
                                    <select class="form-control m-input m-input--air" id="select_status">
                                        <option value="waiting" {{$status == 'waiting' ? 'selected' : ''}}>
                                            Chờ xác minh
                                        </option>
                                        <option value="success" {{$status == 'success' ? 'selected' : ''}}>
                                            Đã xác minh
                                        </option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group m-form__group row">
                                    <table class="table">
                                        <!--begin::Thead-->
                                        <thead>
                                        <tr>
                                            <th style="text-align: center" width="2%">STT</th>
                                            <th style="text-align: center">IP guest</th>
                                            <th style="text-align: center">Mã đơn hàng</th>
                                            <th style="text-align: center">Họ và tên KH</th>
                                            <th style="text-align: center">Email</th>
                                            <th style="text-align: center">Tel</th>
                                            <th style="text-align: center">Trạng thái</th>
                                            <th style="text-align: center">Thao tác</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(count($model)>0)
                                            @foreach($model as $key=>$ttdh)
                                                <tr class="odd gradeX">
                                                    <td style="text-align: center">{{$key+1}}</td>
                                                    <td style="text-align: center">{{$ttdh->ipguest}}</td>
                                                    <td style="text-align: center">{{$ttdh->madh}}</td>
                                                    <td>{{$ttdh->name}}</td>
                                                    <td>{{$ttdh->email}}</td>
                                                    <td>{{$ttdh->tel}}</td>
                                                    <td style="text-align: center">
                                                        @if($ttdh->status == 'waiting')
                                                            <span class="m-badge  m-badge--danger m-badge--wide">{{$ttdh->status}}</span>
                                                        @else
                                                            <span class="m-badge  m-badge--success m-badge--wide">{{$ttdh->status}}</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" onclick="showcartsct({{$ttdh->id}})" title="View"><i class="fa fa-eye"></i></button>
                                                        @if(\Illuminate\Support\Facades\Session::has('admin') && session('admin')->level == 'Administrator')
                                                        <div class="dropdown">
                                                            <a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown" aria-expanded="false">
                                                                <i class="la la-ellipsis-h"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right" style="position: absolute; transform: translate3d(-132px, -59px, 0px); top: 0px; left: 0px; will-change: transform;" x-placement="top-end">
                                                                <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>
                                                                <a class="dropdown-item" href="#"><i class="la la-remove"></i> Delete</a>
                                                                <!--a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a-->
                                                            </div>
                                                        </div>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                        <tr>
                                            <td colspan="6" style="text-align: center">Hiện chưa có thông tin đơn hàng của bạn</td>
                                        </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>

                            </div>

                    </div>
                    <!--end::Portlet-->
                </div>
                <div class="col-md-4">
                    <div class="m-portlet m-portlet--tab" id="ttctcarts">
                    </div>
                    <!--begin::Portlet-->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showcartsct(id){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        //alert(id);
        $.ajax({
            url: '/ajax/showcartsct',
            type: 'GET',
            data: {
                _token: CSRF_TOKEN,
                id: id
            },
            dataType: 'JSON',
            success: function (data) {
                if (data.status == 'success') {
                    $('#ttctcarts').replaceWith(data.message);
                }
                else
                    toastr.error(data.message);
            }
        })
    }
    $(function() {

        $('#select_status').change(function () {
            var current_path_url = '/quanlydonhang?';
            var status = '&status=' + $('#select_status').val();
            var url = current_path_url + status;
            window.location.href = url;
        });
    })
</script>
@stop