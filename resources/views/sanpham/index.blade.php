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
                                            <img src="{{url('images/sanpham/noimage.png')}}" alt="">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="m_user_profile_tab_2" aria-expanded="false">
                                    <div class="m-portlet__body">
                                        <div class="form-group m-form__group row">
                                            <ul>
                                                <li>Tính năng 1 </li>
                                                <li>Tính năng 2... </li>
                                                .....
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="m_user_profile_tab_3" aria-expanded="false">
                                    <div class="m-portlet__body">
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