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
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        Thông tin tuyển dụng nhân viên {{$model->vitri}}
                    </h3>
                </div>
                @if(\Illuminate\Support\Facades\Session::has('admin') && session('admin')->level == 'Administrator')
                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                        <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                            <i class="la la-plus m--hide"></i>
                            <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 21.5px;"></span>
                            <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                    <div class="m-dropdown__content">
                                        <ul class="m-nav">
                                            <li class="m-nav__item">
                                                <a href="{{url('vitrituyendung/'.$model->id.'/edit')}}" class="m-nav__link">
                                                    <i class="m-nav__link-icon fa fa-edit"></i>
                                                    <span class="m-nav__link-text">
                                                        Chỉnh sửa
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="m-content">
            <div class="row">
                <div class="col-xl-12">
                    <!--begin:: Widgets/Finance Stats-->
                    <div class="m-portlet  m-portlet--full-height">
                        <div class="m-portlet__body">
                            <div class="m-widget1 m-widget1--paddingless">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Mô tả công việc
                                            </h3><br>
                                            <span class="m-widget1__desc">
                                                <p>@if(isset($model->mota))
                                                        {!! nl2br(e($model->mota)) !!}
                                                    @else
                                                        <label>Đang cập nhật thông tin....</label>
                                                    @endif
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Yêu cầu công việc
                                            </h3><br>
                                            <span class="m-widget1__desc">
                                                <p>@if(isset($model->yeucau))
                                                        {!! nl2br(e($model->yeucau)) !!}
                                                    @else
                                                        <label>Đang cập nhật thông tin....</label>
                                                    @endif
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Quyền lợi được hưởng
                                            </h3><br>
                                            <span class="m-widget1__desc">
                                                <p>@if(isset($model->quyenloi))
                                                        {!! nl2br(e($model->quyenloi)) !!}
                                                    @else
                                                        <label>Đang cập nhật thông tin....</label>
                                                    @endif
                                                </p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Thông tin liên hệ
                                            </h3><br>
                                            <span class="m-widget1__desc">
                                                <div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                                    <div class="m-list-timeline m-list-timeline--skin-light">
                                                        <div class="m-list-timeline__items">
                                                            <div class="m-list-timeline__item">
                                                                <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                            <span class="m-list-timeline__text">
                                                Phụ trách tuyển dụng:
                                                <b style="color: #2eade3">
                                                    Nguyễn Thị Mỹ Hạnh
                                                </b>
                                            </span>
                                                            </div>
                                                            <div class="m-list-timeline__item">
                                                                <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
                                            <span class="m-list-timeline__text">
                                                Email:  <b style="color: #2eade3">phanmemcuocsong@gmail.com</b>
                                            </span>
                                                            </div>
                                                            <div class="m-list-timeline__item">
                                                                <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                            <span class="m-list-timeline__text">
                                                Số ĐT liên hệ: <b style="color: #2eade3">043.6343951 - 0935210486</b>
                                            </span>
                                                            </div>
                                                            <div class="m-list-timeline__item">
                                                                <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                            <span  class="m-list-timeline__text">
                                                    Địa chỉ nộp hồ sơ: <b style="color: #2eade3">Khu tái định cư X2A, Yên Sở, Hoàng Mai, Hà Nội</b>
                                            </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end:: Widgets/Finance Stats-->
                </div>
            </div>
        </div>
    </div>
</div>
@stop