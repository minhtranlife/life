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
                        Thông tin cập nhật
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