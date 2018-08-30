@extends('main')

@section('custom-style')
<link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{url('assets/global/plugins/select2/select2.css')}}"/>
<!-- END THEME STYLES -->
@stop


@section('custom-script')
    <!-- BEGIN PAGE LEVEL PLUGINS -->

    <script type="text/javascript" src="{{url('assets/global/plugins/select2/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{url('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <script src="{{url('assets/admin/pages/scripts/table-managed.js')}}"></script>
    <script>
        jQuery(document).ready(function() {
            TableManaged.init();
        });
    </script>
@stop

@section('content')
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                       Tuyển dụng
                    </h3>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="m-portlet m-portlet--full-height m-portlet--tabs ">
                        <div class="m-portlet__head">
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group row">
                                    <label>Đang cập nhật thông tin....</label>
                                    <table class="table">
                                        <!--begin::Thead-->
                                        <thead>
                                        <tr>
                                            <th style="text-align: center" width="2%">STT</th>
                                            <th style="text-align: center">Vị trí</th>
                                            <th style="text-align: center">Hạn nộp hồ sơ</th>
                                            <th style="text-align: center">Số lượng</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="odd gradeX">
                                            <td style="text-align: center">1</td>
                                            <td class="active" >Lập trình viên</td>
                                            <td style="text-align: center">30/12/2019</td>
                                            <td style="text-align: center">2</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <!--begin:: Widgets/Support Cases-->
                <div class="m-portlet  m-portlet--full-height">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Hồ sơ
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                            <div class="m-list-timeline m-list-timeline--skin-light">
                                <div class="m-list-timeline__items">
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                        <span class="m-list-timeline__text">
                                            Đơn xin việc, sơ yếu lý lịch
                                        </span>
                                        <span class="m-list-timeline__time">

                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                        <span class="m-list-timeline__text">
                                            Giấy khai sinh, CMND, sổ hộ khẩu
                                        </span>
                                        <span class="m-list-timeline__time">
                                            <a href="#" class="m-link">
                                                (bản sao)
                                            </a>
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                        <span class="m-list-timeline__text">
                                            Bằng tốt nghiệp - bảng điểm
                                        </span>
                                        <span class="m-list-timeline__time">
                                             <a href="#" class="m-link">
                                                 (bản sao)
                                             </a>
                                        </span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                        <span class="m-list-timeline__text">
                                            Văn bằng chứng chỉ khác
                                        </span>
                                        <span class="m-list-timeline__time">
                                            <a href="#" class="m-link">
                                                (bản sao)
                                            </a>
                                        </span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end:: Widgets/Support Stats-->
            </div>
            <div class="col-xl-6">
                <!--begin:: Widgets/Finance Stats-->
                <div class="m-portlet  m-portlet--full-height">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title">
                                <h3 class="m-portlet__head-text">
                                    Liên hệ
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                            <div class="m-list-timeline m-list-timeline--skin-light">
                                <div class="m-list-timeline__items">
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
																	<span class="m-list-timeline__text">
																		System error -
																		<a href="#" class="m-link">
                                                                            Check
                                                                        </a>
																	</span>
																	<span class="m-list-timeline__time">
																		2 hrs
																	</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
																	<span class="m-list-timeline__text">
																		Production server down
																	</span>
																	<span class="m-list-timeline__time">
																		3 hrs
																	</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																	<span class="m-list-timeline__text">
																		Production server up
																	</span>
																	<span class="m-list-timeline__time">
																		5 hrs
																	</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																	<span href="" class="m-list-timeline__text">
																		New order received
																		<span class="m-badge m-badge--danger m-badge--wide">
																			urgent
																		</span>
																	</span>
																	<span class="m-list-timeline__time">
																		7 hrs
																	</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																	<span class="m-list-timeline__text">
																		12 new users registered
																	</span>
																	<span class="m-list-timeline__time">
																		Just now
																	</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																	<span class="m-list-timeline__text">
																		System shutdown
																		<span class="m-badge m-badge--success m-badge--wide">
																			pending
																		</span>
																	</span>
																	<span class="m-list-timeline__time">
																		14 mins
																	</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
																	<span class="m-list-timeline__text">
																		New invoice received
																	</span>
																	<span class="m-list-timeline__time">
																		20 mins
																	</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
																	<span class="m-list-timeline__text">
																		DB overloaded 80%
																		<span class="m-badge m-badge--info m-badge--wide">
																			settled
																		</span>
																	</span>
																	<span class="m-list-timeline__time">
																		1 hr
																	</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
																	<span class="m-list-timeline__text">
																		New invoice received
																	</span>
																	<span class="m-list-timeline__time">
																		20 mins
																	</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
																	<span class="m-list-timeline__text">
																		DB overloaded 80%
																		<span class="m-badge m-badge--info m-badge--wide">
																			settled
																		</span>
																	</span>
																	<span class="m-list-timeline__time">
																		1 hr
																	</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
																	<span class="m-list-timeline__text">
																		System error -
																		<a href="#" class="m-link">
                                                                            Check
                                                                        </a>
																	</span>
																	<span class="m-list-timeline__time">
																		2 hrs
																	</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
																	<span class="m-list-timeline__text">
																		Production server down
																	</span>
																	<span class="m-list-timeline__time">
																		3 hrs
																	</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
																	<span class="m-list-timeline__text">
																		Production server up
																	</span>
																	<span class="m-list-timeline__time">
																		5 hrs
																	</span>
                                    </div>
                                    <div class="m-list-timeline__item">
                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
																	<span href="" class="m-list-timeline__text">
																		New order received
																		<span class="m-badge m-badge--danger m-badge--wide">
																			urgent
																		</span>
																	</span>
																	<span class="m-list-timeline__time">
																		7 hrs
																	</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end:: Widgets/Finance Stats-->
            </div>
        </div>
    </div>
</div>

@stop