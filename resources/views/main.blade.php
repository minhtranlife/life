<!DOCTYPE html>
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>
        LifeSoft | {{$pageTitle}}
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Base Styles -->
    <link href="{{url('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/demo/demo2/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

    @yield('custom-style')
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="{{ url('images/LIFESOFT.png')}}" type="image/x-icon">
    <script type="text/javascript">
        function time() {
            var today = new Date();
            var weekday=new Array(7);
            weekday[0]="Chủ nhật";
            weekday[1]="Thứ hai";
            weekday[2]="Thứ ba";
            weekday[3]="Thứ tư";
            weekday[4]="Thứ năm";
            weekday[5]="Thứ sáu";
            weekday[6]="Thứ bảy";
            var day = weekday[today.getDay()];
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            m=checkTime(m);
            s=checkTime(s);
            nowTime = h+":"+m+":"+s;
            if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = day+', '+ dd+'/'+mm+'/'+yyyy;

            tmp='<span class="date"> '+today+' | '+nowTime+'</span>';

            document.getElementById("clock").innerHTML=tmp;

            clocktime=setTimeout("time()","1000","JavaScript");
            function checkTime(i)
            {
                if(i<10){
                    i="0" + i;
                }
                return i;
            }
        }
    </script>
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Scripts -->
    <script src="{{url('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/demo/demo2/base/scripts.bundle.js')}}" type="text/javascript"></script>

    <!--end::Base Scripts -->
    <!--begin::Page Snippets -->
    <script src="{{url('assets/app/js/dashboard.js')}}" type="text/javascript"></script>

    <!--end::Page Snippets -->
    <script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script>

    @yield('custom-script')
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  onload="time()">
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <!-- begin::Header -->
    <header class="m-grid__item		m-header "  data-minimize-mobile="hide" data-minimize-offset="200" data-minimize-mobile-offset="200" data-minimize="minimize" >
        <div class="m-header__top">
            <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
                <div class="m-stack m-stack--ver m-stack--desktop">
                    <!-- begin::Brand -->
                    <div class="m-stack__item m-brand">
                        <div class="m-stack m-stack--ver m-stack--general m-stack--inline">
                            <div class="m-stack__item m-stack__item--middle m-brand__logo">
                                <a href="{{url('')}}" class="m-brand__logo-wrapper">
                                    <img src="{{url('images/logolife.png')}}">
                                </a>
                            </div>
                            <div class="m-stack__item m-stack__item--middle m-brand__tools">
                                <!-- begin::Responsive Header Menu Toggler-->
                                <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                                    <span></span>
                                </a>
                                <!-- end::Responsive Header Menu Toggler-->
                                <!-- begin::Topbar Toggler-->
                                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                                    <i class="flaticon-more"></i>
                                </a>
                                <!--end::Topbar Toggler-->
                            </div>
                        </div>
                    </div>
                    <!-- end::Brand -->
                    <!-- begin::Topbar -->
                    <!--Start Cart-->
                    <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-topbar__nav-wrapper">
                                <ul class="m-topbar__nav m-nav m-nav--inline">
                                    <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" data-dropdown-toggle="click" data-dropdown-persistent="true" title="Giỏ hàng">
                                        <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                            <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                            <span class="m-nav__link-icon">
                                                <span class="m-nav__link-icon-wrapper">
                                                    <i class="flaticon-cart"></i>
                                                </span>
                                            </span>
                                        </a>
                                        <!--Carts-->
                                        <?php
                                            $ip = $_SERVER['REMOTE_ADDR'];
                                            $modelcarts = \App\CartsCtDf::where('ipguest',$ip)->get();

                                        ?>
                                        <!--End Carts-->
                                        <div class="m-dropdown__wrapper" >
                                            <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
                                                    <span class="m-dropdown__header-title">
                                                        Quản lý đơn hàng
                                                    </span>
                                                    <span class="m-dropdown__header-subtitle">
                                                        IP Guest: <label>{{$ip}}</label>
                                                        <input type="hidden" id="ipguest" name="ipguest" value="{{$ip}}">
                                                    </span>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                                            <div class="m-list-timeline m-list-timeline--skin-light">
                                                                <div class="m-list-timeline__items" id="ttcarts" >
                                                                    @foreach($modelcarts as $cart)
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                        <span class="m-list-timeline__text">
                                                                            {{$cart->tensp}}
                                                                        </span>
                                                                        <span class="m-list-timeline__time">
                                                                           <button type="button" class="btn m-btn--pill m-btn--air  btn-outline-brand btn-sm" onclick="delcarts({{$cart->id}})">
                                                                               Xóa
                                                                           </button>
                                                                        </span>
                                                                    </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="m-nav m-nav--skin-light">
                                                            <li class="m-nav__separator m-nav__separator--fit"></li>
                                                            <li class="m-nav__item" style="text-align: center">
                                                                <a class="btn m-btn--pill m-btn--air btn-secondary btn-sm" href="{{url('quanlydonhang?&ipguest='.$ip)}}">
                                                                    <i class="fa fa-shopping-cart"></i>&nbsp;Quản lý đơn hàng
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                                        <a href="#" class="m-nav__link m-dropdown__toggle">
                                            <span class="m-topbar__userpic m--hide">
                                                <img src="{{ url('images/LIFESOFT.png')}}"  width="250" alt="Công ty TNHH phát triển phần mềm Cuộc Sống"/>
                                            </span>
                                            <span class="m-topbar__welcome">
                                                Hello,&nbsp;
                                            </span>
                                            <span class="m-topbar__username">
                                                {{Session::has('admin') ? session('admin')->name : 'Guest'}}
                                            </span>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                                                    <div class="m-card-user m-card-user--skin-dark">
                                                        <div class="m-card-user__pic">
                                                            <img src="{{url('/images/avatar/default-user.png')}}" class="m--img-rounded m--marginless" alt=""/>
                                                        </div>
                                                        <div class="m-card-user__details">
                                                            <span class="m-card-user__name m--font-weight-500">
                                                                {{Session::has('admin') ? session('admin')->name : 'Guest'}}
                                                            </span>
                                                            <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                                                {{Session::has('admin') ? session('admin')->level : ''}}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav m-nav--skin-light">
                                                            @if (Session::has('admin'))
                                                            <li class="m-nav__item">
                                                                <a href="" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-lock"></i>
                                                                    <span class="m-nav__link-title">
                                                                        <span class="m-nav__link-wrap">
                                                                            <span class="m-nav__link-text">
                                                                                Change PassWord
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit"></li>
                                                            <li class="m-nav__item">
                                                                <a href="{{url('logout')}}" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                    Logout
                                                                </a>
                                                            </li>
                                                            @else
                                                            <li class="m-nav__item">
                                                                <a href="{{url('login')}}" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                    Login
                                                                </a>
                                                            </li>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Cart-->
                    <!-- end::Topbar -->
                </div>
            </div>
        </div>
        <!--Menu-->
        <div class="m-header__bottom">
            <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
                <div class="m-stack m-stack--ver m-stack--desktop">
                    <!-- begin::Horizontal Menu -->
                    <div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
                        <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark "  >
                            <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                                <li class="m-menu__item  m-menu__item"  aria-haspopup="true">
                                    <a  href="{{url('')}}" class="m-menu__link ">
                                        <span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Trang chủ
												</span>
                                    </a>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" data-menu-submenu-toggle="click" aria-haspopup="true">
                                    <a href="#" class="m-menu__link m-menu__toggle">
                                        <span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Sản phẩm
												</span>
                                        <i class="m-menu__hor-arrow la la-angle-down"></i>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                        <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                        <ul class="m-menu__subnav">
                                            <?php
                                            $nhomsp = \App\DmSanPham::select('nhomsp')->groupBy('nhomsp')->get()
                                            ?>
                                            @foreach($nhomsp as $nhomsp)
                                            <li class="m-menu__item  m-menu__item--submenu" data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
                                                <a href="#" class="m-menu__link m-menu__toggle">
															<span class="m-menu__link-text">
																{{$nhomsp->nhomsp}}
															</span>
                                                    <i class="m-menu__hor-arrow la la-angle-right"></i>
                                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                                </a>
                                                <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                                                    <span class="m-menu__arrow "></span>
                                                    <ul class="m-menu__subnav">
                                                        <?php
                                                        $modelsp = \App\DmSanPham::where('nhomsp',$nhomsp->nhomsp)->get();
                                                        ?>
                                                        @foreach($modelsp as $sp)
                                                        <li class="m-menu__item " data-redirect="true" aria-haspopup="true">
                                                            <a href="{{url('sanpham?&id='.$sp->id)}}" class="m-menu__link ">
                                                                <span class="m-menu__link-text">
                                                                    {{$sp->tensp}}
                                                                </span>
                                                            </a>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </li>

                                <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" aria-haspopup="true">
                                    <a  href="#" class="m-menu__link m-menu__toggle">
                                        <span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Công ty
												</span>
                                        <i class="m-menu__hor-arrow la la-angle-down"></i>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                        <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item ">
                                                <a href="{{url('company')}}" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-users"></i>
                                                    <span class="m-menu__link-wrap">
                                                        <span class="m-menu__link-text">
                                                            Đôi nét về LifeSoft
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item">
                                                <a href="{{url('imgcompany')}}" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-diagram"></i>
                                                    <span class="m-menu__link-text">
                                                        Hoạt động của công ty
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" aria-haspopup="true">
                                    <a  href="#" class="m-menu__link m-menu__toggle">
                                        <span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Tuyển dụng
												</span>
                                        <i class="m-menu__hor-arrow la la-angle-down"></i>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                        <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item ">
                                                <a href="{{url('vitrituyendung')}}" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-users"></i>
                                                    <span class="m-menu__link-wrap">
                                                        <span class="m-menu__link-text">
                                                            Vị trí tuyển dụng
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item">
                                                <a href="{{url('chinhsachtuyendung')}}" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-diagram"></i>
                                                    <span class="m-menu__link-text">
                                                        Chính sách tuyển dụng
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel">
                                    <a  href="{{url('support')}}" class="m-menu__link m-menu__toggle">
                                        <span class="m-menu__item-here"></span>
                                        <span class="m-menu__link-text">
                                            Liên hệ
                                        </span>
                                    </a>
                                </li>
                                <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" aria-haspopup="true">
                                    <a  href="#" class="m-menu__link m-menu__toggle">
                                        <span class="m-menu__item-here"></span>
												<span class="m-menu__link-text">
													Tin tức
												</span>
                                        <i class="m-menu__hor-arrow la la-angle-down"></i>
                                        <i class="m-menu__ver-arrow la la-angle-right"></i>
                                    </a>
                                    <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                        <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                        <ul class="m-menu__subnav">
                                            <li class="m-menu__item">
                                                <a href="{{url('')}}" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-graphic-2"></i>
                                                    <span class="m-menu__link-text">
                                                        Tin LifeSoft
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item">
                                                <a href="{{url('')}}" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-clipboard"></i>
                                                    <span class="m-menu__link-text">
                                                        Tin sản phẩm
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end::Horizontal Menu -->
                    <!--begin::Search-->
                    <div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-" id="m_quicksearch" data-search-type="default">
                        <!--begin::Search Form -->
                        <!--end::Search Form -->
                        <div style="color: #ffffff" id="clock">
                        </div>
                    </div>
                    <div id="clock"></div>
                    <!--end::Search-->
                </div>
            </div>
        </div>
        <!--EndMenu-->
    </header>
    <!-- end::Header -->
    <!-- begin::Body -->

    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor-desktop m-grid--desktop m-body">
        <!--Content-->
@yield('content')

        <!--End Content-->
    </div>
    <!-- end::Body -->
    <!-- begin::Footer -->
    <footer class="m-grid__item m-footer ">

        <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
            <div class="m-footer__wrapper">
                <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                    <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                        <span class="m-footer__copyright">
                             2016 &copy; LifeSoft <a href="" class="m-link" >Tiện ích hơn - Hiệu quả hơn</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        <span class="skype-button bubble" data-contact-id="ngochieuvp_life" title="Hỗ trợ khách hàng"></span>
    <!-- end::Footer -->
</div>
<!-- end:: Page -->
<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300" style="margin-bottom: 0px" title="Back to top">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->
<!-- begin::Quick Nav -->
<ul class="m-nav-sticky" style="margin-top: 30px;">
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Facebook" data-placement="left">
        <a href="https://www.facebook.com/Life-Software-225268274327591/?fb_dtsg_ag=Adyf-6c8OxVrBLwTDfp0QT5YKiKaMZSPmSl4GqvTK71puA%3AAdzfmz3FU7pNYu85-BcU4bdYgSrqXWDbnDb2bKxxSHXWjA" target="_blank">
            <i class="fa fa-facebook-square"></i>
        </a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Map" data-placement="left">
        <a href="https://goo.gl/maps/Ms1AxXBmLEo" target="_blank">
            <i class="fa fa-map-marker"></i>
        </a>

    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
        <a href="{{url('support')}}" target="_blank">
            <i class="la la-life-ring"></i>
        </a>
    </li>
</ul>
<!-- begin::Quick Nav -->


</body>
<script>
    function delcarts(id){
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
            url: '/ajax/delcarts',
            type: 'GET',
            data: {
                _token: CSRF_TOKEN,
                id: id,
                ipguest: $('#ipguest').val()
            },
            dataType: 'JSON',
            success: function (data) {
                if (data.status == 'success') {
                    $('#ttcarts').replaceWith(data.message);
                    toastr.success("Đã xóa sản phẩm trong giỏ hàng", "Thành công!");
                }
                else
                    toastr.error(data.message);
            }
        })
    }
</script>
<!-- end::Body -->
</html>
