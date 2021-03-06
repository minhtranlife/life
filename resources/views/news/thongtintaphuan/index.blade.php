@extends('main')

@section('custom-style')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 106 css*/
        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 101 css*/
        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
@stop


@section('custom-script')
    <script src="{{url('imgslide/js/jssor.slider-27.5.0.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
                {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
                {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
                $AutoPlay: 1,
                $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,
                    $SpacingX: 5,
                    $SpacingY: 5
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <script src="{{url('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/demo/default/custom/components/datatables/child/data-local.js')}}" type="text/javascript"></script>

@stop

@section('content')
    <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
                <!--begin:: Widgets/Best Sellers-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="m-portlet m-portlet--full-height">
                    <div class="m-portlet__body" style="position:relative;margin:0 auto;top:0px;left:0px;width:1200px;height:550px;overflow:hidden;visibility:hidden;">
                        <!--begin::Content-->
                        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
                            <!-- Loading Screen -->
                            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="{{url('imgslide/img/spin.svg')}}" />
                            </div>
                            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                                <div>
                                    <img data-u="image" src="{{url('imgslide/img/031.jpg')}}" title="vck"/>
                                    <img data-u="thumb" src="{{url('imgslide/img/031-s190x90.jpg')}}" />
                                </div>
                                <div>
                                    <img data-u="image" src="{{url('imgslide/img/032.jpg')}}" />
                                    <img data-u="thumb" src="{{url('imgslide/img/032-s190x90.jpg')}}" />
                                </div>
                                <div>
                                    <img data-u="image" src="{{url('imgslide/img/033.jpg')}}" />
                                    <img data-u="thumb" src="{{url('imgslide/img/033-s190x90.jpg')}}" />
                                </div>
                                <div>
                                    <img data-u="image" src="{{url('imgslide/img/034.jpg')}}" />
                                    <img data-u="thumb" src="{{url('imgslide/img/034-s190x90.jpg')}}" />
                                </div>
                                <div>
                                    <img data-u="image" src="{{url('imgslide/img/035.jpg')}}" />
                                    <img data-u="thumb" src="{{url('imgslide/img/035-s190x90.jpg')}}" />
                                </div>
                                <div>
                                    <img data-u="image" src="{{url('imgslide/img/036.jpg')}}" />
                                    <img data-u="thumb" src="{{url('imgslide/img/036-s190x90.jpg')}}" />
                                </div>
                                <div>
                                    <img data-u="image" src="{{url('imgslide/img/037.jpg')}}" />
                                    <img data-u="thumb" src="{{url('imgslide/img/037-s190x90.jpg')}}" />
                                </div>
                                <div>
                                    <img data-u="image" src="{{url('imgslide/img/038.jpg')}}" />
                                    <img data-u="thumb" src="{{url('imgslide/img/038-s190x90.jpg')}}" />
                                </div>
                                <div>
                                    <img data-u="image" src="{{url('imgslide/img/039.jpg')}}" />
                                    <img data-u="thumb" src="{{url('imgslide/img/039-s190x90.jpg')}}" />
                                </div>
                                <div>
                                    <img data-u="image" src="{{url('imgslide/img/040.jpg')}}" />
                                    <img data-u="thumb" src="{{url('imgslide/img/040-s190x90.jpg')}}" />
                                </div>
                            </div>
                            <!-- Thumbnail Navigator -->
                            <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
                                <div data-u="slides">
                                    <div data-u="prototype" class="p" style="width:190px;height:90px;">
                                        <div data-u="thumbnailtemplate" class="t"></div>
                                        <svg viewbox="0 0 16000 16000" class="cv">
                                            <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                            <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                            <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- Arrow Navigator -->
                            <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
                                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                    <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                                    <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
                                </svg>
                            </div>
                            <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
                                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                    <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                                    <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
                                </svg>
                            </div>
                        </div>
                        <!--end::Content-->
                    </div>
                </div>
                </div>
            </div>
                <!--end:: Widgets/Best Sellers-->
            <div class="row">
                <div class="col-xl-12">
                    <div class="m-portlet m-portlet--full-height">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                        Lịch trình tập huấn
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin::Content-->
                            <div class="m-widget5">
                                <div class="m-widget5__item">
                                    <div class="m-widget5__pic">
                                        <img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
                                    </div>
                                    <div class="m-widget5__content">
                                        <h4 class="m-widget5__title">
                                            Great Logo Designn
                                        </h4>
                                        <span class="m-widget5__desc">
                                            Make Metronic Great  Again.Lorem Ipsum Amet
                                        </span>
                                        <div class="m-widget5__info">
                                        <span class="m-widget5__author">
                                            Author:
                                        </span>
                                        <span class="m-widget5__info-label">
                                            author:
                                        </span>
                                        <span class="m-widget5__info-author-name">
                                            Fly themes
                                        </span>
                                        <span class="m-widget5__info-label">
                                            Released:
                                        </span>
                                        <span class="m-widget5__info-date m--font-info">
                                            23.08.17
                                        </span>
                                        </div>
                                    </div>
                                    <div class="m-widget5__stats1">
                                        <span class="m-widget5__number">
                                            19,200
                                        </span>
                                        <br>
                                        <span class="m-widget5__sales">
                                            sales
                                        </span>
                                    </div>
                                    <div class="m-widget5__stats2">
															<span class="m-widget5__number">
																1046
															</span>
                                        <br>
															<span class="m-widget5__votes">
																votes
															</span>
                                    </div>
                                </div>
                            </div>
                            <!--end::Content-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--End-->
        <!-- END: Subheader -->
    <script type="text/javascript">jssor_1_slider_init();</script>
@stop