@extends('main')

@section('custom-style')

@stop


@section('custom-script')

@stop

@section('content')
    <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            Thông tin sản phẩm
                        </h3>
                    </div>
                    <!--Add per -->
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
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon fa fa-plus-circle"></i>
                                                    <span class="m-nav__link-text">
                                                        Thêm mới
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="{{url('sanpham/'.$model->id.'/edit')}}" class="m-nav__link">
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
                    <!--End-->
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__body">
                                <div class="m-card-profile">

                                    <div class="m-card-profile__pic">
                                        <div class="m-card-profile__pic-wrapper">
                                            @if(isset($model->avatar))
                                                <img src="{{url('images/sanpham/'.$model->avatar)}}" alt="">
                                            @else
                                                <img src="{{url('images/sanpham/noimage.png')}}" alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="m-card-profile__details">
                                    <span class="m-card-profile__name">
                                        {{$model->nhomsp}}
                                    </span>
                                        <a href="" class="m-link" style="font-size: 15px">
                                            {{$model->tensp}}
                                        </a>
                                    </div>
                                </div>
                                <div class="m-portlet__body-separator"></div>
                                <div class="m-widget1 m-widget1--paddingless">
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    Chương trình liên quan
                                                </h3>
                                            @foreach($modellq as $splq)
                                                <ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
                                                    <li class="m-nav__item">
                                                            <a href="{{url('sanpham?&id='.$splq->id)}}" class="m-nav__link">{{$splq->tensp}}</a>
                                                    </li>
                                                </ul>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="m-portlet m-portlet--full-height m-portlet--tabs ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-tools">
                                    <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab" aria-expanded="true">
                                                <i class="flaticon-share m--hide"></i>
                                                Tổng quan
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" role="tab" aria-expanded="false">
                                                Tính năng
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_3" role="tab" aria-expanded="false">
                                                Download
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="m_user_profile_tab_1" aria-expanded="true">
                                    <div class="m-portlet__body">
                                        <div class="form-group m-form__group row">
                                            @if(isset($model->gioithieusp))
                                                {!! nl2br(e($model->gioithieusp)) !!}
                                            @else
                                                <label>Đang cập nhật thông tin....</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="m_user_profile_tab_2" aria-expanded="false">
                                    <div class="m-portlet__body">
                                        <div class="form-group m-form__group row">
                                            @if(isset($model->tinhnangsp))
                                            {!! nl2br(e($model->tinhnangsp)) !!}
                                            @else
                                                <label>Đang cập nhật thông tin....</label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="m_user_profile_tab_3" aria-expanded="false">
                                    <div class="m-portlet__body">
                                        @if(isset($model->capnhatsp))
                                        {!! nl2br(e($model->capnhatsp)) !!}
                                        @else
                                            <label>Đang cập nhật thông tin....</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop