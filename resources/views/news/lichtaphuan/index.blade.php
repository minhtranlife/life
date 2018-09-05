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
                    <div class="row">
                        <div class="col-xl-8">
                            <!--begin:: Widgets/Best Sellers-->
                            <div class="m-portlet m-portlet--full-height">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Thông tin tập huấn
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <!--begin::Content-->
                                    <div class="tab-content">
                                        <div class="tab-pane active" aria-expanded="true">
                                            <!--begin::m-widget5-->
                                            <div class="m-widget5">
                                                <div class="m-widget5__item">
                                                    <div class="m-widget5__pic">
                                                        <img class="m-widget7__img" src="assets/app/media/img//products/product6.jpg" alt="">
                                                    </div>
                                                    <div class="m-widget5__content">
                                                        <h4 class="m-widget5__title">
                                                           Phần mềm quản lý lương
                                                        </h4>
															<span class="m-widget5__desc">
																Tỉnh Khánh Hòa - Việt Nam
															</span>
                                                        <div class="m-widget5__info">
																<span class="m-widget5__author">
																	Thời gian dự kiến:
																</span>
																<span class="m-widget5__info-label">
																	Từ
																</span>
																<span class="m-widget5__info-date m--font-info">
																	12/08/2018
																</span>
                                                                <span class="m-widget5__info-label">
																	Đến
																</span>
																<span class="m-widget5__info-date m--font-info">
																	31/08/2018
																</span>
                                                        </div>
                                                    </div>
                                                    <div class="m-widget5__stats1">
															<span class="m-widget5__number">
																19,200
															</span>
                                                        <br>
															<span class="m-widget5__sales">
																Đơn vị
															</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::m-widget5-->
                                        </div>
                                    </div>
                                    <!--end::Content-->
                                </div>
                            </div>
                            <!--end:: Widgets/Best Sellers-->
                        </div>
                        <div class="col-xl-4">
                            <!--begin:: Widgets/Authors Profit-->
                            <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                               Thông tin lịch trình tập huấn
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__body">
                                    <div class="m-widget4">
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__info">
                                                <span class="m-widget4__title">
                                                    Từ ngày 12/08 - 14/08
                                                </span>
                                                <br>
                                                <span class="m-widget4__sub">
                                                    Thành phố Nha Trang - Khánh Hòa
                                                </span>
                                            </div>
                                            <span class="m-widget4__ext">
                                                <span class="m-widget4__number m--font-brand">
                                                    120
                                                </span>
                                                <br>
                                                <span class="m-widget5__sales">
                                                    Đơn vị
                                                </span>
                                            </span>
                                        </div>
                                        <div class="m-widget4__item">
                                            <div class="m-widget4__info">
                                                <span class="m-widget4__title">
                                                    Từ ngày 12/08 - 14/08
                                                </span>
                                                <br>
                                                <span class="m-widget4__sub">
                                                    Số 01 Điện Biên Phủ - Thành phố Nha Trang - Khánh Hòa
                                                </span>
                                            </div>
												<span class="m-widget4__ext">
													<span class="m-widget4__number m--font-brand">
														120
													</span>
                                                    <span class="m-widget5__sales">
                                                        Đơn vị
                                                    </span>
												</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/Authors Profit-->
                        </div>
                    </div>
                    <!--End-->
                </div>
            </div>
            <!-- END: Subheader -->
        </div>
    </div>
@stop