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
@stop