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
                        Đôi nét về công ty
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
                                <div class="m-card-profile__title m--hide">
                                    Your Profile
                                </div>
                                <div class="m-card-profile__pic">
                                    <div class="m-card-profile__pic-wrapper">
                                        <img src="{{url('images/LIFESOFT.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="m-card-profile__details">
                                    <span class="m-card-profile__name">
                                        Công ty TNHH phát triển phần mềm Cuộc Sống
                                    </span>
                                    <a href="" class="m-card-profile__email m-link">
                                        phanmemcuocsong@gmail.com
                                    </a>
                                </div>
                            </div>
                            <div class="m-portlet__body-separator"></div>
                            <div class="m-widget1 m-widget1--paddingless">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Tên đầy đủ:
                                            </h3>
                                            <span class="m-widget1__desc">
                                                Công ty TNHH phát triển phần mềm Cuộc Sống
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Địa chỉ:
                                            </h3>
                                            <span class="m-widget1__desc">
                                                T14 – Cụm 591 – Liên Ninh – Thanh trì – Hà Nội
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Văn phòng đại diện:
                                            </h3>
                                            <span class="m-widget1__desc">
                                                Số 77 - Khu Tái định cư X2A Yên Sở - Hoàng Mai - Hà Nội
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Giấy phép kinh doanh:
                                            </h3>
                                            <span class="m-widget1__desc">
                                                 Số: 0106070279 - ngày cấp: 27/12/2012
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Số điện thoại
                                            </h3>
                                            <span class="m-widget1__desc">
                                                 0436343965
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Đại diện pháp luật
                                            </h3>
                                            <span class="m-widget1__desc">
                                                 NGUYỄN THỊ MINH TUYẾT
                                            </span>
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
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_1" role="tab" aria-expanded="true">
                                            <i class="flaticon-share m--hide"></i>
                                            Tiêu chí
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" role="tab" aria-expanded="false">
                                           Giải thưởng
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_3" role="tab" aria-expanded="false">
                                            Ban Lãnh đạo
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="m_user_profile_tab_1" aria-expanded="true">
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group row">
                                        <dl>
                                            <dd>-	Công ty TNHH phát triển phần mềm cuộc sống (Life_Software) được thành lập 27/12/2012,
                                                sau gần {{date('Y')-2012}}  năm liên tục cố gắng cùng sự đồng lòng của toàn cán bộ, lãnh đạo công ty cùng
                                                sự ủng hộ của khách hàng, công ty đã ngày một vững chắc trong ngành công nghệ thông tin của nước nhà.</dd>
                                            <dd>-	Hiện công ty đang là thành viên của Hiệp hội phần mềm và dịch vụ CNTT Việt Nam (Vinasa).</dd>
                                            <dd>-	Công ty có đội ngũ chuyên viên phần mềm được đào tạo bài bản, chuyên sâu, có kinh nghiệm nhiều
                                                năm trong lĩnh vực viết phần mềm quản lý, kế toán, giải quyết các bài toán giải pháp cục bộ cho
                                                các đơn vị chuyên biệt.</dd>
                                            <dd>-	Với tiêu chí <a href="" class="m-link">Tiện ích hơn - Hiệu quả hơn</a> công ty chúng tôi tự tin cung cấp cho khách hàng phần mềm
                                            tiện ích, hiệu quả nhất cùng với dịch vụ hỗ trợ tốt nhất với những cán bộ có nghiệp vụ vững chắc, luôn
                                            sát cánh bên bạn giải quyết các vấn đề phát sinh trong quá trình sử dụng</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="m_user_profile_tab_2" aria-expanded="false">
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group row">
                                        <ul>
                                            <li>Sao khuê 2018 </li>
                                            <li>Sao khuê 2018 </li>
                                            <li>Sao khuê 2018 </li>
                                            <li>Sao khuê 2018 </li>
                                            <li>Sao khuê 2018 </li>
                                            <li>Sao khuê 2018 </li>
                                            <li>Sao khuê 2018 </li>
                                            <li>Sao khuê 2018 </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="m_user_profile_tab_3" aria-expanded="false">
                                <div class="m-portlet__body">
                                    <div class="form-group" style="text-align: center">
                                        <ul style="text-align: center;list-style: none">
                                        <li>
                                            <a href="">
                                                <img style="width: 100px; height: 130px;" src="{{url('images/avatar/no-image-available.jpg')}}" title="Bà Nguyễn Thị Minh Tuyết">
                                            </a>
                                            <div class="info">
                                                    <div class="name">
                                                        Bà Nguyễn Thị Minh Tuyết
                                                    </div>
                                                    Giám đốc
                                            </div>
                                        </li>
                                        </ul>
                                    </div>
                                    <div class="form-group" style="text-align: center">
                                        <table>
                                            <tr style="text-align: center">
                                                <td width="50%"><a href="">
                                                        <img style="width: 100px; height: 130px;" src="{{url('images/avatar/no-image-available.jpg')}}" title="Ông Trần Ngọc Hiếu">
                                                    </a>
                                                    <div class="info">
                                                        <div class="name">
                                                            Ông Trần Ngọc Hiếu
                                                        </div>
                                                        Phó Giám đốc Kỹ thuật
                                                    </div>
                                                </td>
                                                <td>
                                                <td width="50%"><a href="">
                                                        <img style="width: 100px; height: 130px;" src="{{url('images/avatar/no-image-available.jpg')}}" title="Ông Đỗ Đức Hướng">
                                                    </a>
                                                    <div class="info">
                                                            <div class="name">
                                                                Ông Đỗ Đức Hướng
                                                            </div>
                                                            Phó Giám đốc Tổng hợp
                                                    </div></td>
                                                <td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-group" style="text-align: center">
                                    <table>
                                        <tr style="text-align: center">
                                            <td width="25%"><a href="">
                                                    <img style="width: 100px; height: 130px;" src="{{url('images/avatar/no-image-available.jpg')}}" title="Ông Phan Hoàng Trung">
                                                </a>
                                                <div class="info">
                                                        <div class="name">
                                                            Ông Phan Hoàng Trung
                                                        </div>
                                                        Trưởng phòng Phần mềm
                                                </div></td>
                                            <td>
                                            <td width="25%"><a href="">
                                                    <img style="width: 100px; height: 130px;" src="{{url('images/avatar/no-image-available.jpg')}}" title="Ông Nguyễn Xuân Trường">
                                                </a>
                                                <div class="info">
                                                        <div class="name">
                                                            Ông Nguyễn Xuân Trường
                                                        </div>
                                                        Trưởng văn phòng 1
                                                </div></td>
                                            <td>
                                            <td width="25%"><a href="">
                                                    <img style="width: 100px; height: 130px;" src="{{url('images/avatar/no-image-available.jpg')}}" title="Ông Nguyễn Văn Nguyên">
                                                </a>
                                                <div class="info">
                                                        <div class="name">
                                                            Ông Nguyễn Văn Nguyên
                                                        </div>
                                                        Trưởng văn phòng 2
                                                </div></td>
                                            <td>
                                            <td width="25%">
                                                    <img style="width: 100px; height: 130px;" src="{{url('images/avatar/no-image-available.jpg')}}" title="Ông Nguyễn Văn Nam">
                                                <div class="info">
                                                        <div class="name">
                                                            Ông Nguyễn Văn Nam
                                                        </div>
                                                        Trưởng phòng kinh doanh
                                                </div>
                                            </td>
                                            <td>
                                        </tr>
                                    </table>
                                </div>
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