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
                            Chỉnh sửa thông tin hình ảnh hoạt động
                        </h3>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-lg-12">
                        {!! Form::model($model, ['method' => 'PATCH', 'url'=>'imgcompany/'. $model->id, 'class'=>'m-form m-form--fit m-form--label-align-right','id'=>'update_ttsp','files'=>true,'enctype'=>'multipart/form-data']) !!}
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <div class="col-lg-6">
                                    <label class="">
                                        Hình ảnh hiện tại
                                    </label>
                                    <img src="{{url('images/imgcompany/'.$model->img)}}" width="120">
                                </div>
                                <div class="col-lg-6">
                                {!!Form::file('img', array('id'=>'img','class' => 'passvalid'))!!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">

                                <div class="col-lg-6">
                                    <label class="">
                                       Mô tả hình ảnh
                                    </label>
                                    {!!Form::text('mota', null, array('id' => 'mota','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label>
                                        Chi tiết
                                    </label>
                                    {!!Form::text('chitiet', null, array('id' => 'chitiet','class' => 'form-control required'))!!}
                                </div>
                            </div>
                        </div>

                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <div class="row">
                                    <div class="col-lg-9 ml-lg-auto">
                                        <button type="submit" class="btn btn-success">
                                            Update
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