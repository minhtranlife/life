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
                            Thêm mới thông tin tuyển dụng
                        </h3>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <div class="row">
                    <div class="col-lg-12">
                        {!! Form::open(['url'=>'vitrituyendung','method'=>'post' , 'files'=>true, 'id' => 'create_ttsp','class'=>'m-form m-form--fit m-form--label-align-right','enctype'=>'multipart/form-data']) !!}
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group row">
                                <div class="col-lg-6">
                                    <label>
                                        Vị trí
                                    </label>
                                    {!!Form::text('vitri', null, array('id' => 'vitri','class' => 'form-control required'))!!}
                                </div>
                                <div class="col-lg-6">
                                    <label class="">
                                        Số lượng
                                    </label>
                                    {!!Form::text('soluong', null, array('id' => 'soluong','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-6">
                                    <label>
                                        Hạn nộp hồ sơ
                                    </label>
                                    {!!Form::text('hannophs', null, array('id' => 'hannophs','class' => 'form-control required'))!!}
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label>
                                        Mô tả công việc
                                    </label>
                                                <textarea id="mota" class="form-control" name="mota" cols="30" rows="10"
                                                          placeholder="Mô tả công việc"></textarea>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label>
                                        Yêu cầu công việc
                                    </label>

                                                <textarea id="yeucau" class="form-control" name="yeucau" cols="30" rows="10"
                                                          placeholder="Yêu cầu công việc"></textarea>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <div class="col-lg-12">
                                    <label>
                                        Quyền lợi được hưởng
                                    </label>
                                                <textarea id="quyenloi" class="form-control" name="quyenloi" cols="30" rows="10"
                                                          placeholder="Quyền lợi được hưởng"></textarea>
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