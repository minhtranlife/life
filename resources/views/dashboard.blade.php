@extends('main')
@section('custom-style')
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{url('nivoslider/themes/default/default.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{url('nivoslider/themes/light/light.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{url('nivoslider/themes/dark/dark.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{url('nivoslider/themes/bar/bar.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{url('nivoslider/nivo-slider.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{url('nivoslider/demo/style.css')}}" type="text/css" media="screen" />

    <!--Ảnh hưởng font size body-->
    <link rel="stylesheet" href="{{url('css/bootstrapcdn.min.css')}}">
    <!--End-->
    <!--link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet"-->
    <link rel="stylesheet" href="{{url('css/baguetteBox.min.css')}}">
    <link rel="stylesheet" href="{{url('css/thumbnail-gallery.css')}}">
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
                        <div class="col-xl-12">
                            <!--begin:: Widgets/Application Sales-->
                            <div class="m-portlet m-portlet--full-height">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Sản phẩm
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="m-portlet__head-tools">
                                        <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget11_tab1_content" role="tab" aria-expanded="true">
                                                    Phần mềm kế toán
                                                </a>
                                            </li>
                                            <li class="nav-item m-tabs__item">
                                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget11_tab2_content" role="tab" aria-expanded="false">
                                                    Phần mềm quản lý
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="m_widget11_tab1_content" aria-expanded="true">
                                            <div class="tz-gallery">
                                                @if(count($modelspkt)>0)
                                                    <div class="row">
                                                        @foreach($modelspkt as $kt)
                                                            <div class="col-sm-6 col-md-3">
                                                                <div class="thumbnail">
                                                                    <br>
                                                                    <div style="text-align: right;">
                                                                        <button type="button" class="btn btn-outline-brand btn-sm">
                                                                            <i class="fa fa-cart-plus"></i> Thêm vào giỏ hàng
                                                                        </button>
                                                                    </div>
                                                                    <br>
                                                                    <a class="lightbox" href="{{url('sanpham?&id='.$kt->id)}}">
                                                                        @if(isset($kt->avatar))
                                                                            <img src="{{url('images/sanpham/'.$kt->avatar)}}" alt=""  width="80">
                                                                        @else
                                                                            <img src="{{url('images/sanpham/noimage.png')}}" alt="" width="80">
                                                                        @endif
                                                                    </a>
                                                                    <div class="caption">
                                                                        <h3>{{$kt->tensp}}</h3>
                                                                        <p></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @else
                                                    <div class="row text-center">
                                                        <div class="col-lg-12">
                                                            <p>Đang cập nhật thông tin</p>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <!--end::Widget 11-->
                                        </div>
                                        <div class="tab-pane" id="m_widget11_tab2_content" aria-expanded="false">
                                            <div class="tz-gallery">
                                                @if(count($modelspql)>0)
                                                    <div class="row">
                                                        @foreach($modelspql as $ql)
                                                            <div class="col-sm-6 col-md-3">
                                                                <div class="thumbnail">
                                                                    <br>
                                                                    <div style="text-align: right">
                                                                        <button type="button" class="btn btn-outline-brand btn-sm" onclick="addcarts({{$ql->id}})">
                                                                            <i class="fa fa-cart-plus"></i> Thêm vào giỏ hàng
                                                                        </button>
                                                                    </div>
                                                                    <br>
                                                                    <a class="lightbox" href="{{url('sanpham?&id='.$ql->id)}}">
                                                                        @if(isset($ql->avatar))
                                                                            <img src="{{url('images/sanpham/'.$ql->avatar)}}" alt=""  width="80">
                                                                        @else
                                                                            <img src="{{url('images/sanpham/noimage.png')}}" alt="" width="80">
                                                                        @endif
                                                                    </a>
                                                                    <div class="caption">
                                                                        <h3>{{$ql->tensp}}</h3>
                                                                        <p></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                @else
                                                    <div class="row text-center">
                                                        <div class="col-lg-12">
                                                            <p>Đang cập nhật thông tin</p>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Application Sales-->
                        </div>
                    </div>
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
                                            . LifeSoft luôn tự tin cung cấp cho khách hàng phần mềm tiện ích, hiệu quả
                                            nhất cùng với dịch vụ hỗ trợ tốt nhất với những cán bộ có nghiệp vụ vững chắc, luôn sát cánh
                                            bên bạn giải quyết các vấn đề phát sinh trong quá trình sử dụng</p>
                                        </div>
                                        <div class="m-widget7__user">
                                        </div>
                                        <div class="m-widget7__button">
                                            <a class="btn m-btn--pill    btn-link" href="{{url('company')}}" role="button">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
<script>
    function addcarts(id){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        alert(id);
        /*$.ajax({
            url: '/kkgdvlt/kkgia',
            type: 'GET',
            data: {
                _token: CSRF_TOKEN,
                id: id,
                ttcb:  $('#ttcb').val()
            },
            dataType: 'JSON',
            success: function (data) {
                if (data.status == 'success') {
                    $('#ttkkgia').replaceWith(data.message);
                    InputMask();
                }
                else
                    toastr.error("Không thể chỉnh sửa thông tin giá phòng nghỉ!", "Lỗi!");
            }
        })*/
    }
</script>

@stop