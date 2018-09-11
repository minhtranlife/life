@extends('main')


@section('custom-style')
    <!--Ảnh hưởng font size body-->
    <link rel="stylesheet" href="{{url('css/bootstrapcdn.min.css')}}">
    <!--End-->
    <!--link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet"-->
    <link rel="stylesheet" href="{{url('css/baguetteBox.min.css')}}">
    <link rel="stylesheet" href="{{url('css/thumbnail-gallery.css')}}">
@stop


@section('custom-script')
@stop

@section('content')
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver	m-container m-container--responsive m-container--xxl m-page__container">
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="row">
                <div class="col-12">
                    <div class="m-portlet  m-portlet--full-height">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text">
                                       Một số hình ảnh hoạt động của công ty
                                    </h3>
                                </div>
                            </div>
                            @if(\Illuminate\Support\Facades\Session::has('admin') && session('admin')->level == 'Administrator')
                            <div class="m-portlet__head-tools">
                                <ul class="m-portlet__nav">
                                    <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                        <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                                            <i class="la la-ellipsis-h m--font-brand"></i>
                                        </a>
                                        <div class="m-dropdown__wrapper">
                                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 22.5px;"></span>
                                            <div class="m-dropdown__inner">
                                                <div class="m-dropdown__body">
                                                    <div class="m-dropdown__content">
                                                        <ul class="m-nav">
                                                            <li class="m-nav__item">
                                                                <a href="{{url('imgcompany/create')}}" class="m-nav__link">
                                                                    <i class="m-nav__link-icon fa fa-plus-circle"></i>
                                                                    <span class="m-nav__link-text">
                                                                       Thêm mới
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            @endif
                        </div>
                        <div class="m-portlet__body">
                            <div class="tz-gallery">
                                @if(count($model)>0)
                                <div class="row">
                                    @foreach($model as $img)
                                    <div class="col-sm-6 col-md-4">
                                        <div class="thumbnail">
                                            <a class="lightbox" href="{{url('images/imgcompany/'.$img->img)}}">
                                                <img src="{{url('images/imgcompany/'.$img->img)}}" alt="Park"  width="300">
                                            </a>
                                            <div class="caption">
                                                @if(\Illuminate\Support\Facades\Session::has('admin') && session('admin')->level == 'Administrator')
                                                <a href="{{url('imgcompany/'.$img->id.'/edit')}}"> <h3>{{$img->mota}}</h3></a>
                                                @else
                                                    <h3>{{$img->mota}}</h3>
                                                @endif
                                                <p>{{$img->chitiet}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="row text-center">
                                    <div class="col-lg-12">
                                        {!! $model->render() !!}
                                    </div>
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

        </div>
    </div>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
@stop