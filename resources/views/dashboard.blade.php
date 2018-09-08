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
                <img src="{{url('images/dashboard/HPNY.jpg')}}" data-thumb="{{url('images/dashboard/HPNY.jpg')}}" alt="" title="<marquee>Kính chúc quý khách một năm mới An Khang - Thịnh Vượng"</marquee>
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
                        <div class="col-xl-12">
                            <!--begin:: Widgets/Announcements 1-->
                            <div class="m-portlet m--bg-accent m-portlet--bordered-semi m-portlet--skin-dark m-portlet--full-height">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                LIFESOFT
                                            </h3>
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
                    </div>
                </div>
            </div>
        </div>

@stop