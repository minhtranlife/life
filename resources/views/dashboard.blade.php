@extends('main')
@section('custom-style')
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('nivoslider/themes/default/default.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{url('nivoslider/themes/light/light.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{url('nivoslider/themes/dark/dark.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{url('nivoslider/themes/bar/bar.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{url('nivoslider/nivo-slider.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{url('nivoslider/demo/style.css')}}" type="text/css" media="screen" />
@stop
@section('custom-script')

    <script type="text/javascript" src="{{url('nivoslider/jquery.nivo.slider.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            Dashboard.init();
            $('#slider').nivoSlider();
        });
    </script>

@stop
@section('content')
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <!--Độ phân giải 1000 x 250-->
                <img src="{{url('images/dashboard/HPNY.jpg')}}" data-thumb="{{url('images/dashboard/HPNY.jpg')}}" alt=""
                     title="Nhân dịp đầu Xuân năm mới, Công ty phần mềm LifeSoft xin gửi tới Quý Khách hàng lời Chúc mừng năm mới. Kính chúc Quý Khách hàng một năm mới AN KHANG - THỊNH VƯỢNG">
                <img src="{{url('images/dashboard/laravel.png')}}" data-thumb="{{url('images/dashboard/laravel.png')}}" alt="" title="" />
                <!--img src="{{url('images/dashboard/img_mountains_wide.jpg')}}" data-thumb="{{url('images/dashboard/img_mountains_wide.jpg')}}" alt="" title="" />
                <img src="{{url('images/dashboard/img_nature_wide.jpg')}}" data-thumb="{{url('images/dashboard/img_nature_wide.jpg')}}" alt="" />
                <img src="{{url('images/dashboard/img_snow_wide.jpg')}}" data-thumb="{{url('images/dashboard/img_snow_wide.jpg')}}" alt="" title="" /-->
            </div>
        </div>

        <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">
            <div class="m-grid__item m-grid__item--fluid m-wrapper">
                <div class="m-content">
                    <div class="row">
                        <div class="col-xl-6">
                            <!--begin:: Widgets/Announcements 1-->
                            <div class="m-portlet m--bg-accent m-portlet--bordered-semi m-portlet--skin-dark m-portlet--full-height">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <br>
                                            <img src="{{url('images/LIFESOFT.png')}}" alt="" width="120">
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <!--begin::Widget 7-->
                                    <div class="m-widget7 m-widget7--skin-dark">
                                        <div class="m-widget7__desc">
                                            <b><span style="font-size: 30px">{{(date('Y')-2012)}} năm thành lập và phát triển</span></b>
                                            <br><br>
                                            (27/12/2012 - 27/12/{{date('Y')}})
                                            <br><br>
                                            <p>Với tiêu chí <a href="" class="m-link">Tiện ích hơn - Hiệu quả hơn</a>
                                            . LifeSoft luôn công ty chúng tôi tự tin cung cấp cho khách hàng phần mềm tiện ích, hiệu quả
                                            nhất cùng với dịch vụ hỗ trợ tốt nhất với những cán bộ có nghiệp vụ vững chắc, luôn sát cánh
                                            bên bạn giải quyết các vấn đề phát sinh trong quá trình sử dụng</p>
                                        </div>
                                        <div class="m-widget7__user">
                                        </div>
                                        <div class="m-widget7__button">
                                            <a class="m-btn m-btn--pill btn btn-danger" href="{{url('company')}}" role="button">
                                                About
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Widget 7-->
                                </div>
                            </div>
                            <!--end:: Widgets/Announcements 1-->
                        </div>
                        <div class="col-lg-6">
                            <!--begin::Portlet-->
                            <div class="m-portlet m-portlet--full-height m-portlet--tabs">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
                                            <h3 class="m-portlet__head-text">
                                                Google Maps
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                        <div style="height:100%;overflow:hidden;display:block) no-repeat 50% 50%;">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.799243264962!2d105.8606992149315!3d20.960575786035385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac32b794a333%3A0x276dc1f2aa113828!2zQ8O0bmcgVHkgVE5ISCBQaMOhdCBUcmnhu4NuIFBo4bqnbiBN4buBbSBDdeG7mWMgU-G7kW5n!5e0!3m2!1svi!2s!4v1536547472673"
                                                    frameborder="0" style="border:0;height: 100%;width: 100%" allowfullscreen></iframe>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

@stop