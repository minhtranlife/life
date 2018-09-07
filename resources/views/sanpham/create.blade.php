@extends('main')

@section('custom-style')
@stop


@section('custom-script')
    <script src="{{url('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
    <!--end::Base Scripts -->
    <!--begin::Page Resources -->
    <script src="{{url('assets/demo/default/custom/components/forms/validation/form-controls.js')}}" type="text/javascript"></script>
    <!--end::Page Resources -->
@stop

@section('content')
    <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="m-subheader__title ">
                            Thêm mới thông tin sản phẩm
                        </h3>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-lg-12">
                        {!! Form::open(['url'=>'sanpham','method'=>'post' , 'files'=>true, 'id' => 'create_ttsp','class'=>'m-form m-form--fit m-form--label-align-right','enctype'=>'multipart/form-data']) !!}
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                {!!Form::file('avatar', array('id'=>'avatar','class' => 'passvalid'))!!}
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-6">
                                    <label>
                                        Nhóm sản phẩm
                                    </label>
                                    {!! Form::select(
                                    'nhomsp',
                                    array(
                                    'Phần mềm kế toán' => 'Phần mềm kế toán',
                                    'Phần mềm quản lý' => 'Phần mềm quản lý',
                                    ),null,
                                    array('id' => 'nhomsp', 'class' => 'form-control m-input',))
                                    !!}
                                </div>
                                <div class="col-lg-6">
                                    <label class="">
                                        Tên sản phẩm
                                    </label>
                                    {!!Form::text('tensp', null, array('id' => 'tensp','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label>
                                        Mô tả
                                    </label>
                                                <textarea id="gioithieusp" class="form-control" name="gioithieusp" cols="30" rows="10"
                                                          placeholder="Mô tả sản phẩm"></textarea>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label>
                                        Tính năng
                                    </label>

                                                <textarea id="tinhnangsp" class="form-control" name="tinhnangsp" cols="30" rows="10"
                                                          placeholder="Tính năng sản phẩm"></textarea>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label>
                                        Dowload
                                    </label>
                                                <textarea id="tinhnangsp" class="form-control" name="capnhatsp" cols="30" rows="10"
                                                          placeholder="Dowload hướng dẫn"></textarea>
                                </div>
                            </div>

                        </div>

                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="submit" class="btn btn-success">
                                            Create
                                        </button>
                                        <button type="reset" class="btn btn-secondary">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop