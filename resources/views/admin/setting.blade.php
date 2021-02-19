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
                            <div class="form-group col-md-6">
                                <label for="banner_image" class="col-sm-2 control-label">Ảnh Banner</label>
                                <div class="col-sm-10">
                                    <input type="file" id="banner_image" name="banner_image">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="limit_block_products" class="col-sm-2 control-label">Giới hạn số sản phẩm của khối</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="limit_block_products" placeholder=""
                                        name="limit_block_products" value="{{ $isAdd ? '' : $setting->limit_block_products }}">
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
                                <label for="zalo_link" class="col-sm-2 control-label">Zalo link</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="zalo_link" placeholder=""
                                        name="zalo_link" value="{{ $isAdd ? '' : $setting->zalo_link }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="custom_js" class="col-sm-2 control-label">Custom HTML (Footer)</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" id="custom_js" placeholder=""
                                        name="custom_js">{{ $isAdd ? '' : $setting->custom_js }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="fb_widget_code" class="col-sm-2 control-label">Facebook widget code</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" id="fb_widget_code" placeholder=""
                                        name="fb_widget_code">{{ $isAdd ? '' : $setting->fb_widget_code }}</textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tawk_to_widget_code" class="col-sm-2 control-label">Tawk to widget code</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" id="tawk_to_widget_code" placeholder=""
                                        name="tawk_to_widget_code">{{ $isAdd ? '' : $setting->tawk_to_widget_code }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="feature1_heading" class="col-sm-2 control-label">Feature 1 heading</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="feature1_heading" placeholder=""
                                        name="feature1_heading" value="{{ $isAdd ? '' : $setting->feature1_heading }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="feature1_subheading" class="col-sm-2 control-label">Feature 1 subheading</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="feature1_subheading" placeholder=""
                                        name="feature1_subheading" value="{{ $isAdd ? '' : $setting->feature1_subheading }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="feature2_heading" class="col-sm-2 control-label">Feature 2 heading</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="feature2_heading" placeholder=""
                                        name="feature2_heading" value="{{ $isAdd ? '' : $setting->feature2_heading }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="feature2_subheading" class="col-sm-2 control-label">Feature 2 subheading</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="feature2_subheading" placeholder=""
                                        name="feature2_subheading" value="{{ $isAdd ? '' : $setting->feature2_subheading }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="feature3_heading" class="col-sm-2 control-label">Feature 3 heading</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="feature3_heading" placeholder=""
                                        name="feature3_heading" value="{{ $isAdd ? '' : $setting->feature3_heading }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="feature3_subheading" class="col-sm-2 control-label">Feature 3 subheading</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="feature3_subheading" placeholder=""
                                        name="feature3_subheading" value="{{ $isAdd ? '' : $setting->feature3_subheading }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="feature4_heading" class="col-sm-2 control-label">Feature 4 heading</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="feature4_heading" placeholder=""
                                        name="feature4_heading" value="{{ $isAdd ? '' : $setting->feature4_heading }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="feature4_subheading" class="col-sm-2 control-label">Feature 4 subheading</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="feature4_subheading" placeholder=""
                                        name="feature4_subheading" value="{{ $isAdd ? '' : $setting->feature4_subheading }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="new_product_heading" class="col-sm-2 control-label">Sản phẩm mới (tiêu đề)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="new_product_heading" placeholder=""
                                        name="new_product_heading" value="{{ $isAdd ? '' : $setting->new_product_heading }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="new_product_subheading" class="col-sm-2 control-label">Sản phẩm mới (mô tả)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="new_product_subheading" placeholder=""
                                        name="new_product_subheading" value="{{ $isAdd ? '' : $setting->new_product_subheading }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="sale_product_heading" class="col-sm-2 control-label">Sản phẩm khuyến mãi (tiêu đề)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sale_product_heading" placeholder=""
                                        name="sale_product_heading" value="{{ $isAdd ? '' : $setting->sale_product_heading }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="sale_product_subheading" class="col-sm-2 control-label">Sản phẩm khuyến mãi (mô tả)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sale_product_subheading" placeholder=""
                                        name="sale_product_subheading" value="{{ $isAdd ? '' : $setting->sale_product_subheading }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="meta_keyword" class="col-sm-2 control-label">Meta keyword</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="meta_keyword" placeholder=""
                                        name="meta_keyword" value="{{ $isAdd ? '' : $setting->meta_keyword }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="meta_title" class="col-sm-2 control-label">Meta title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="meta_title" placeholder=""
                                        name="meta_title" value="{{ $isAdd ? '' : $setting->meta_title }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="meta_description" class="col-sm-2 control-label">Meta description</label>
                                <div class="col-sm-10">
                                    <textarea type="text" class="form-control" id="meta_description" placeholder=""
                                        name="meta_description">{{ $isAdd ? '' : $setting->meta_description }}</textarea>
                                </div>
                            </div>
{{--                            <div class="form-group col-md-6">--}}
{{--                                <label for="meta_title" class="col-sm-2 control-label">Meta title</label>--}}
{{--                                <div class="col-sm-10">--}}
{{--                                    <input type="text" class="form-control" id="meta_title" placeholder=""--}}
{{--                                           name="meta_title" value="{{ $isAdd ? '' : $setting->meta_title }}">--}}
{{--                                </div>--}}
{{--                            </div>--}}
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
