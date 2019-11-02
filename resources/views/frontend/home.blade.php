<!doctype html>
<html lang="en">
@php
    $setting = Helper::getSettings();
@endphp
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="google-site-verification" content="zvJpG7X4_dW54MsfGpamC9UPvAMvae78RWLj2TBUfzM" />
    <meta name="title" content="{{isset($setting->meta_title) ? $setting->meta_title : '' }}">
    <meta name="description" content="{{isset($setting->meta_description) ? $setting->meta_description : '' }}">
    <meta name="keywords" content="{{isset($setting->meta_keyword) ? $setting->meta_keyword : '' }}">
    <link rel="shortcut icon" type="image/png" href="{{$setting->logo}}"/>
{{--    Meta og--}}
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{isset($setting->meta_title) ? $setting->meta_title : '' }}" />
    <meta property="og:description" content="{{isset($setting->meta_description) ? $setting->meta_description : '' }}" />
    <meta property="og:url" content="https://gialatoanquoc.com/" />
    <meta property="og:site_name" content="WashPlus - App giặt là số 1 Việt Nam" />
    <meta property="fb:page_id" content="158578774511775" />
    <meta property="og:image" content="{{$setting->logo}}" />
    <meta property="og:image:secure_url" content="{{$setting->logo}}" />
{{--    end meta og--}}

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('css/owl.theme.default.min.css')}}">
    <link href='{{url("css/styles.css")}}' type="text/css"  rel="stylesheet" />
    
    @if(isset($setting->banner_image) && $setting->banner_image != '')
    <style>
        .header-top{
            background-image: url('{{url($setting->banner_image)}}');
        }
    </style>
    @endif
    <title>{{isset($setting->title) ? $setting->title : '' }}</title>
    
</head>

<body>
	<header class="header-top mb50">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
					aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button> -->
				<div class="navbar-collapse" id="navbarTogglerDemo01">
					<a class="navbar-brand" href="#"><img alt="{{$setting->alt_logo}}" src="{{$setting->logo}}" /></a>
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0 hidden-sm">
						<li class="icon-header">
                            <a target="_blank" href="{{$setting->facebook}}">
							<svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%"
								viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
								<path
									d="M17,2V2H17V6H15C14.31,6 14,6.81 14,7.5V10H14L17,10V14H14V22H10V14H7V10H10V6A4,4 0 0,1 14,2H17Z">
								</path>
							</svg>
                            </a>    
						</li>
						<li class="icon-header">
                            <a target="_blank" href="{{$setting->twitter}}">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)"> <path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z"></path> </svg>
                            </a>
                        </li>
						<li class="icon-header">
                            <a target="_blank" href="{{$setting->instagram}}">
							<svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%"
								viewBox="0 0 24 24" fill="rgba(255,255,255,1)">
								<path
									d="M20,6.5A0.5,0.5 0 0,1 19.5,7H17.5A0.5,0.5 0 0,1 17,6.5V4.5A0.5,0.5 0 0,1 17.5,4H19.5A0.5,0.5 0 0,1 20,4.5M4.5,20A0.5,0.5 0 0,1 4,19.5V11H6.09C6.03,11.32 6,11.66 6,12A6,6 0 0,0 12,18A6,6 0 0,0 18,12C18,11.66 17.96,11.32 17.91,11H20V19.5A0.5,0.5 0 0,1 19.5,20M12,8A4,4 0 0,1 16,12A4,4 0 0,1 12,16A4,4 0 0,1 8,12A4,4 0 0,1 12,8M20,2H4C2.89,2 2,2.89 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z">
								</path>
							</svg>
                            </a>
						</li>
						<li class="icon-header">
                            <a target="_blank" href="{{$setting->youtube}}">
                            <svg xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,255,255,1)"> <path d="M10,16.5V7.5L16,12M20,4.4C19.4,4.2 15.7,4 12,4C8.3,4 4.6,4.19 4,4.38C2.44,4.9 2,8.4 2,12C2,15.59 2.44,19.1 4,19.61C4.6,19.81 8.3,20 12,20C15.7,20 19.4,19.81 20,19.61C21.56,19.1 22,15.59 22,12C22,8.4 21.56,4.91 20,4.4Z"></path> </svg>
                            </a>
                        </li>
						<li class="icon-header">
                            <a target="_blank" href="{{$setting->android_link}}">
                            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-play" class="svg-inline--fa fa-google-play fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"></path></svg>
                            </a>
                        </li>
                        <li class="icon-header">
                            <a target="_blank" href="{{$setting->ios_link}}">
                            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="app-store" class="svg-inline--fa fa-app-store fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M255.9 120.9l9.1-15.7c5.6-9.8 18.1-13.1 27.9-7.5 9.8 5.6 13.1 18.1 7.5 27.9l-87.5 151.5h63.3c20.5 0 32 24.1 23.1 40.8H113.8c-11.3 0-20.4-9.1-20.4-20.4 0-11.3 9.1-20.4 20.4-20.4h52l66.6-115.4-20.8-36.1c-5.6-9.8-2.3-22.2 7.5-27.9 9.8-5.6 22.2-2.3 27.9 7.5l8.9 15.7zm-78.7 218l-19.6 34c-5.6 9.8-18.1 13.1-27.9 7.5-9.8-5.6-13.1-18.1-7.5-27.9l14.6-25.2c16.4-5.1 29.8-1.2 40.4 11.6zm168.9-61.7h53.1c11.3 0 20.4 9.1 20.4 20.4 0 11.3-9.1 20.4-20.4 20.4h-29.5l19.9 34.5c5.6 9.8 2.3 22.2-7.5 27.9-9.8 5.6-22.2 2.3-27.9-7.5-33.5-58.1-58.7-101.6-75.4-130.6-17.1-29.5-4.9-59.1 7.2-69.1 13.4 23 33.4 57.7 60.1 104zM256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216z"></path></svg>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0 visible-sm">
                    <li class="icon-header">
                            <a target="_blank" href="{{$setting->android_link}}">
                            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-play" class="svg-inline--fa fa-google-play fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z"></path></svg>
                            </a>
                        </li>
                        <li class="icon-header">
                            <a target="_blank" href="{{$setting->ios_link}}">
                            <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="app-store" class="svg-inline--fa fa-app-store fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M255.9 120.9l9.1-15.7c5.6-9.8 18.1-13.1 27.9-7.5 9.8 5.6 13.1 18.1 7.5 27.9l-87.5 151.5h63.3c20.5 0 32 24.1 23.1 40.8H113.8c-11.3 0-20.4-9.1-20.4-20.4 0-11.3 9.1-20.4 20.4-20.4h52l66.6-115.4-20.8-36.1c-5.6-9.8-2.3-22.2 7.5-27.9 9.8-5.6 22.2-2.3 27.9 7.5l8.9 15.7zm-78.7 218l-19.6 34c-5.6 9.8-18.1 13.1-27.9 7.5-9.8-5.6-13.1-18.1-7.5-27.9l14.6-25.2c16.4-5.1 29.8-1.2 40.4 11.6zm168.9-61.7h53.1c11.3 0 20.4 9.1 20.4 20.4 0 11.3-9.1 20.4-20.4 20.4h-29.5l19.9 34.5c5.6 9.8 2.3 22.2-7.5 27.9-9.8 5.6-22.2 2.3-27.9-7.5-33.5-58.1-58.7-101.6-75.4-130.6-17.1-29.5-4.9-59.1 7.2-69.1 13.4 23 33.4 57.7 60.1 104zM256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216z"></path></svg>
                            </a>
                        </li>
                        </ul>
				</div>
			</nav>
            @if(isset($setting->main_text) && $setting->main_text != '')
			<div class="spot-light-box">
				<div class="inner-box">
					{!!$setting->main_text!!}
				</div>
			</div>
            @endif
		</div>
	</header>
	
    @include('frontend.partial.featured-collections')
    @include('frontend.partial.new-products')
	@include('frontend.partial.features')
	@include('frontend.partial.sale-products')
    @include('frontend.partial.partners')
	
	<section class="contact mb50">
		<div class="container">
			<div class="content flex-between">
				<div class="grid-item heading">
					<h1 class="title">Bạn cần chúng tôi giúp đỡ?</h1>
					<p class="des">Mô tả thông tin có giá trị, những điểm nổi bật, lời giới thiệu hấp dẫn về sản phẩm
						dịch vụ.</p>
				</div>
				<div class="grid-item action-wrapper">
					<div class="hotline">
						<div class="title">Hỗ trợ khách hàng 24/24</div>
						<div class="number"><span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
									xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="100%"
									viewBox="0 0 24 24" fill="rgba(102,95,95,1)">
									<path
										d="M6.62,10.79C8.06,13.62 10.38,15.94 13.21,17.38L15.41,15.18C15.69,14.9 16.08,14.82 16.43,14.93C17.55,15.3 18.75,15.5 20,15.5A1,1 0 0,1 21,16.5V20A1,1 0 0,1 20,21A17,17 0 0,1 3,4A1,1 0 0,1 4,3H7.5A1,1 0 0,1 8.5,4C8.5,5.25 8.7,6.45 9.07,7.57C9.18,7.92 9.1,8.31 8.82,8.59L6.62,10.79Z">
									</path>
								</svg></span>{{$setting->phone}}</div>

					</div>
					<div class="action">
						<button>LIÊN HỆ</button>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="footer">
		<div class="container">

		</div>
        <div id="chat-social">
            <div class="chat-item">
                <div class="zalo-group-gv88">
                    <div id="widget-btn-zalo" class="widget-btn-float-container widget-tooltip">
                        <a target="_blank" href="{{isset($setting->zalo_link) ? $setting->zalo_link : '' }}" class="widget-btn-float zalo-color widget-menu-zalo">
                            <span class="button_tap"></span>
                        </a>
                        <div class="widget-tooltiptext" style="cursor: pointer;  background-color: rgba(29, 36, 62, 0.7); ">Chat với chúng tôi qua Zalo
                        </div>
                    </div>
                </div>
                <div class="question-popup">
                    <div id="widget-btn-contact_form" class="widget-btn-float-container widget-tooltip">
                        <a href="tel:{!!isset($setting->phone) ? $setting->phone : '' !!}" id="chat-feedback-customer" class="widget-menu-contact-form">
                            <span class="button_tap active"></span>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" class="svg-inline--fa fa-phone-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg>
                        </a>
                        <div class="widget-tooltiptext" style="cursor: pointer;  background-color: rgba(29, 36, 62, 0.7); ">Để lại lời nhắn cho chúng tôi
                        </div>
                    </div>
                </div>
{{--                <div class="facebook-messager-gv88">--}}
{{--                    <div id="widget-btn-facebook" class="widget-btn-float-container widget-tooltip">--}}
{{--                        <a href="javascript:void(0);" class="widget-menu-facebook">--}}
{{--                            <span class="button_tap"></span></a>--}}
                            {!!isset($setting->fb_widget_code) ? $setting->fb_widget_code : '' !!}
                        <!-- Your customer chat code -->

                        <!-- Your customer chat code -->

{{--                        <div class="widget-tooltiptext" style="cursor: pointer;  background-color: rgba(29, 36, 62, 0.7); ">Chat ngay để nhận tư vấn</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="tawk-to-gv88">
                    <div id="widget-btn-tawk_to" class="widget-btn-float-container widget-tooltip">
                        <a href="javascript:void(0);" class="widget-menu-tawk-to" data-action="widget_current_channel = 'tawk_to'; penTawkToPopup();">
                            <span class="button_tap"></span>
                        </a>
                        {!!isset($setting->tawk_to_widget_code) ? $setting->tawk_to_widget_code : '' !!}
                        <!--End of Tawk.to Script-->
                        <div class="widget-tooltiptext" style="cursor: pointer;  background-color: rgba(29, 36, 62, 0.7); ">Chat trực tiếp cho chúng tôi
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
		integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
		crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
		crossorigin="anonymous"></script>
    <script src="{{url('js/owl.carousel.min.js')}}"></script>
    <script>
        $( document ).ready(function() {
            $(".owl-carousel").owlCarousel({
                nav:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    769:{
                        items:4
                    }
                }
            });
        });
    </script>
    {!!$setting->custom_js!!}
</body>

</html>
