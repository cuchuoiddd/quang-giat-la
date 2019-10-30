@extends('layouts.admin')
@section('title', $isAdd ? 'Thêm mới Cấu hình' : 'Cập nhật Cấu hình')
@section('pageTitle', $isAdd ? 'Thêm mới Cấu hình' : 'Cập nhật Cấu hình')
@section('header-right')
<!-- <a href="{{url('admin/category/create')}}"><button type="button" class="btn btn-block btn-primary">Thêm mới</button></a> -->
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <!-- <h3 class="box-title">Horizontal Form</h3> -->
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal"
                    action="{{$isAdd ? url('admin/settings') : url('admin/settings/'.$setting->id)}}" method="post"
                    enctype="multipart/form-data">
                    @method($isAdd ? 'post' : 'put')
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="title" class="col-sm-2 control-label">Tiêu đề</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                                        value="{{ $isAdd ? '' : $setting->title }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone" class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone" placeholder="Phone"
                                        name="phone" value="{{ $isAdd ? '' : $setting->phone }}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group col-sm-11">
                            <label for="main_text" class="col-sm-2 control-label">Main text</label>

                            <div class="col-sm-10">
                                <textarea id='content' class="editor" rows="10" name="main_text">
                                {{isset($setting) ? $setting->main_text: ''}}
                                </textarea>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="logo" class="col-sm-2 control-label">Logo</label>
                                <div class="col-sm-10">
                                    <input type="file" id="logo" name="logo">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="footer_logo" class="col-sm-2 control-label">Footer Logo</label>
                                <div class="col-sm-10">
                                    <input type="file" id="footer_logo" name="footer_logo">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="alt_logo" class="col-sm-2 control-label">Alt logo</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alt_logo" placeholder="alt logo"
                                        name="alt_logo" value="{{ $isAdd ? '' : $setting->alt_logo }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="alt_footer_logo" class="col-sm-2 control-label">Alt Footer logo</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alt_footer_logo" placeholder="alt banner"
                                        name="alt_footer_logo" value="{{ $isAdd ? '' : $setting->alt_footer_logo }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="facebook" class="col-sm-2 control-label">Facebook</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="facebook" placeholder=""
                                        name="facebook" value="{{ $isAdd ? '' : $setting->facebook }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="twitter" class="col-sm-2 control-label">Twitter</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="twitter" placeholder=""
                                        name="twitter" value="{{ $isAdd ? '' : $setting->twitter }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="instagram" class="col-sm-2 control-label">Instagram</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="instagram" placeholder=""
                                        name="instagram" value="{{ $isAdd ? '' : $setting->instagram }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="youtube" class="col-sm-2 control-label">Youtube</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="youtube" placeholder=""
                                        name="youtube" value="{{ $isAdd ? '' : $setting->youtube }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="address" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address" placeholder=""
                                        name="address" value="{{ $isAdd ? '' : $setting->address }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="copy_right" class="col-sm-2 control-label">Copyright</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="copy_right" placeholder=""
                                        name="copy_right" value="{{ $isAdd ? '' : $setting->copy_right }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="android_link" class="col-sm-2 control-label">Android icon link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="android_link" placeholder=""
                                        name="android_link" value="{{ $isAdd ? '' : $setting->android_link }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ios_link" class="col-sm-2 control-label">IOS icon link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="ios_link" placeholder=""
                                        name="ios_link" value="{{ $isAdd ? '' : $setting->ios_link }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="custom_js" class="col-sm-2 control-label">Custom HTML (Footer)</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" id="custom_js" placeholder=""
                                        name="custom_js">{{ $isAdd ? '' : $setting->custom_js }}</textarea>
                                </div>
                            </div>
                        </div>


                        @if (session('success'))
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <p>{{ session('success') }}</p>
                        </div>
                        @endif
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{url('admin/settings')}}" class="btn btn-default">Hủy bỏ</a>
                        <button type="submit" class="btn btn-info pull-right">Lưu lại</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>
</section>
@endsection