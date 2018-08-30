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
                    <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                        <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                            <div class="m-stack__item m-topbar__nav-wrapper">
                                <ul class="m-topbar__nav m-nav m-nav--inline">
                                    <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                                        <a href="#" class="m-nav__link m-dropdown__toggle">
													<span class="m-topbar__userpic m--hide">
														<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
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
                                                                {{Session::has('admin') ? session('admin')->mail : ''}}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav m-nav--skin-light">
                                                            <!--li class="m-nav__item">
                                                                <a href="profile.html" class="m-nav__link">
                                                                    <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                                    <span class="m-nav__link-title">
                                                                        <span class="m-nav__link-wrap">
                                                                            <span class="m-nav__link-text">
                                                                                My Profile
                                                                            </span>
                                                                            <span class="m-nav__link-badge">
                                                                                <span class="m-badge m-badge--success">
                                                                                    2
                                                                                </span>
                                                                            </span>
                                                                        </span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="m-nav__separator m-nav__separator--fit"></li-->
                                                            <li class="m-nav__item">
                                                                @if (Session::has('admin'))
                                                                    <a href="#" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                        Logout
                                                                    </a>
                                                                @else
                                                                    <a href="#" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                                        Login
                                                                    </a>
                                                                @endif
                                                            </li>
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
                                                            <a href="{{url('sanpham/'.$sp->id)}}" class="m-menu__link ">
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

                                <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel">
                                    <a  href="{{url('company')}}" class="m-menu__link m-menu__toggle">
                                        <span class="m-menu__item-here"></span>
                                            <span class="m-menu__link-text">
                                                Công ty
                                        </span>
                                    </a>
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
                                                    <i class="m-menu__link-icon flaticon-diagram"></i>
                                                    <span class="m-menu__link-wrap">
                                                        <span class="m-menu__link-text">
                                                            Vị trí tuyển dụng
                                                        </span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-menu__item">
                                                <a href="{{url('chinhsachtuyendung')}}" class="m-menu__link ">
                                                    <i class="m-menu__link-icon flaticon-business"></i>
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
                    <!--div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                        <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                            <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
                                    <span class="m-nav__link-text">
                                        About
                                    </span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="#"  class="m-nav__link">
                                    <span class="m-nav__link-text">
                                        Privacy
                                    </span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
                                    <span class="m-nav__link-text">
                                        T&C
                                    </span>
                                </a>
                            </li>
                            <li class="m-nav__item">
                                <a href="#" class="m-nav__link">
                                    <span class="m-nav__link-text">
                                        Purchase
                                    </span>
                                </a>
                            </li>
                            <li class="m-nav__item m-nav__item--last">
                                <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                                    <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                                </a>
                            </li>
                        </ul>
                    </div-->
                </div>
            </div>
        </div>
    </footer>
    <!-- end::Footer -->
</div>
<!-- end:: Page -->
<!-- begin::Quick Sidebar -->
<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
    <div class="m-quick-sidebar__content m--hide">
				<span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
					<i class="la la-close"></i>
				</span>
        <ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
            <li class="nav-item m-tabs__item">
                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">
                    Messages
                </a>
            </li>
            <li class="nav-item m-tabs__item">
                <a class="nav-link m-tabs__link" 		data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
                    Settings
                </a>
            </li>
            <li class="nav-item m-tabs__item">
                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
                    Logs
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active m-scrollable" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
                <div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
                    <div class="m-messenger__messages">
                        <div class="m-messenger__message m-messenger__message--in">
                            <div class="m-messenger__message-pic">
                                <img src="assets/app/media/img//users/user3.jpg" alt=""/>
                            </div>
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-username">
                                        Megan wrote
                                    </div>
                                    <div class="m-messenger__message-text">
                                        Hi Bob. What time will be the meeting ?
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__message m-messenger__message--out">
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-text">
                                        Hi Megan. It's at 2.30PM
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__message m-messenger__message--in">
                            <div class="m-messenger__message-pic">
                                <img src="assets/app/media/img//users/user3.jpg" alt=""/>
                            </div>
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-username">
                                        Megan wrote
                                    </div>
                                    <div class="m-messenger__message-text">
                                        Will the development team be joining ?
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__message m-messenger__message--out">
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-text">
                                        Yes sure. I invited them as well
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__datetime">
                            2:30PM
                        </div>
                        <div class="m-messenger__message m-messenger__message--in">
                            <div class="m-messenger__message-pic">
                                <img src="assets/app/media/img//users/user3.jpg"  alt=""/>
                            </div>
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-username">
                                        Megan wrote
                                    </div>
                                    <div class="m-messenger__message-text">
                                        Noted. For the Coca-Cola Mobile App project as well ?
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__message m-messenger__message--out">
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-text">
                                        Yes, sure.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__message m-messenger__message--out">
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-text">
                                        Please also prepare the quotation for the Loop CRM project as well.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__datetime">
                            3:15PM
                        </div>
                        <div class="m-messenger__message m-messenger__message--in">
                            <div class="m-messenger__message-no-pic m--bg-fill-danger">
										<span>
											M
										</span>
                            </div>
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-username">
                                        Megan wrote
                                    </div>
                                    <div class="m-messenger__message-text">
                                        Noted. I will prepare it.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__message m-messenger__message--out">
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-text">
                                        Thanks Megan. I will see you later.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__message m-messenger__message--in">
                            <div class="m-messenger__message-pic">
                                <img src="assets/app/media/img//users/user3.jpg"  alt=""/>
                            </div>
                            <div class="m-messenger__message-body">
                                <div class="m-messenger__message-arrow"></div>
                                <div class="m-messenger__message-content">
                                    <div class="m-messenger__message-username">
                                        Megan wrote
                                    </div>
                                    <div class="m-messenger__message-text">
                                        Sure. See you in the meeting soon.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-messenger__seperator"></div>
                    <div class="m-messenger__form">
                        <div class="m-messenger__form-controls">
                            <input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
                        </div>
                        <div class="m-messenger__form-tools">
                            <a href="" class="m-messenger__form-attachment">
                                <i class="la la-paperclip"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_settings" role="tabpanel">
                <div class="m-list-settings">
                    <div class="m-list-settings__group">
                        <div class="m-list-settings__heading">
                            General Settings
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Email Notifications
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
                                                <input type="checkbox" checked="checked" name="">
                                                <span></span>
                                            </label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Site Tracking
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										SMS Alerts
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Backup Storage
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Audit Logs
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
                                                <input type="checkbox" checked="checked" name="">
                                                <span></span>
                                            </label>
										</span>
									</span>
                        </div>
                    </div>
                    <div class="m-list-settings__group">
                        <div class="m-list-settings__heading">
                            System Settings
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										System Logs
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Error Reporting
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Applications Logs
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Backup Servers
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
                                                <input type="checkbox" checked="checked" name="">
                                                <span></span>
                                            </label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Audit Logs
									</span>
									<span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
                                                <input type="checkbox" name="">
                                                <span></span>
                                            </label>
										</span>
									</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_logs" role="tabpanel">
                <div class="m-list-timeline">
                    <div class="m-list-timeline__group">
                        <div class="m-list-timeline__heading">
                            System Logs
                        </div>
                        <div class="m-list-timeline__items">
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    12 new users registered
											<span class="m-badge m-badge--warning m-badge--wide">
												important
											</span>
                                </a>
										<span class="m-list-timeline__time">
											Just now
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    System shutdown
                                </a>
										<span class="m-list-timeline__time">
											11 mins
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                <a href="" class="m-list-timeline__text">
                                    New invoice received
                                </a>
										<span class="m-list-timeline__time">
											20 mins
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                <a href="" class="m-list-timeline__text">
                                    Database overloaded 89%
											<span class="m-badge m-badge--success m-badge--wide">
												resolved
											</span>
                                </a>
										<span class="m-list-timeline__time">
											1 hr
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    System error
                                </a>
										<span class="m-list-timeline__time">
											2 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server down
											<span class="m-badge m-badge--danger m-badge--wide">
												pending
											</span>
                                </a>
										<span class="m-list-timeline__time">
											3 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server up
                                </a>
										<span class="m-list-timeline__time">
											5 hrs
										</span>
                            </div>
                        </div>
                    </div>
                    <div class="m-list-timeline__group">
                        <div class="m-list-timeline__heading">
                            Applications Logs
                        </div>
                        <div class="m-list-timeline__items">
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    New order received
											<span class="m-badge m-badge--info m-badge--wide">
												urgent
											</span>
                                </a>
										<span class="m-list-timeline__time">
											7 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    12 new users registered
                                </a>
										<span class="m-list-timeline__time">
											Just now
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    System shutdown
                                </a>
										<span class="m-list-timeline__time">
											11 mins
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                <a href="" class="m-list-timeline__text">
                                    New invoices received
                                </a>
										<span class="m-list-timeline__time">
											20 mins
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                <a href="" class="m-list-timeline__text">
                                    Database overloaded 89%
                                </a>
										<span class="m-list-timeline__time">
											1 hr
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    System error
											<span class="m-badge m-badge--info m-badge--wide">
												pending
											</span>
                                </a>
										<span class="m-list-timeline__time">
											2 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server down
                                </a>
										<span class="m-list-timeline__time">
											3 hrs
										</span>
                            </div>
                        </div>
                    </div>
                    <div class="m-list-timeline__group">
                        <div class="m-list-timeline__heading">
                            Server Logs
                        </div>
                        <div class="m-list-timeline__items">
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server up
                                </a>
										<span class="m-list-timeline__time">
											5 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    New order received
                                </a>
										<span class="m-list-timeline__time">
											7 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    12 new users registered
                                </a>
										<span class="m-list-timeline__time">
											Just now
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    System shutdown
                                </a>
										<span class="m-list-timeline__time">
											11 mins
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                                <a href="" class="m-list-timeline__text">
                                    New invoice received
                                </a>
										<span class="m-list-timeline__time">
											20 mins
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                                <a href="" class="m-list-timeline__text">
                                    Database overloaded 89%
                                </a>
										<span class="m-list-timeline__time">
											1 hr
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    System error
                                </a>
										<span class="m-list-timeline__time">
											2 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server down
                                </a>
										<span class="m-list-timeline__time">
											3 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="" class="m-list-timeline__text">
                                    Production server up
                                </a>
										<span class="m-list-timeline__time">
											5 hrs
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                                <a href="" class="m-list-timeline__text">
                                    New order received
                                </a>
										<span class="m-list-timeline__time">
											1117 hrs
										</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end::Quick Sidebar -->
<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->
<!-- begin::Quick Nav -->
<ul class="m-nav-sticky" style="margin-top: 30px;">
    <!--
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
        <a href="">
            <i class="la la-eye"></i>
        </a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
        <a href="" >
            <i class="la la-comments-o"></i>
        </a>
    </li>
    -->
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Facebook" data-placement="left">
        <a href="https://www.facebook.com/Life-Software-225268274327591/?fb_dtsg_ag=Adyf-6c8OxVrBLwTDfp0QT5YKiKaMZSPmSl4GqvTK71puA%3AAdzfmz3FU7pNYu85-BcU4bdYgSrqXWDbnDb2bKxxSHXWjA" target="_blank">
            <i class="fa fa-facebook-square"></i>
        </a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Map" data-placement="left">
        <a href="http://keenthemes.com/metronic/documentation.html" target="_blank">
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
<!-- end::Body -->
</html>
