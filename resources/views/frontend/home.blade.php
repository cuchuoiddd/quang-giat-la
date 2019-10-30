<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <link href='{{url("css/styles.css")}}' type="text/css"  rel="stylesheet" />
	<title>Hello, world!</title>
</head>
@php
    $setting = Helper::getSettings();
@endphp
<body>
	<header class="header-top mb50">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
					aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<a class="navbar-brand" href="#"><img alt="{{$setting->alt_logo}}" src="{{$setting->logo}}" /></a>
					<ul class="navbar-nav ml-auto mt-2 mt-lg-0">
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
    @include('frontend.partial.featured-products')
	<section class="something-strong mb50">
		<div class="container">
			<div class="content flex-between">
				<div class="grid-item">
					<div class="thumb">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" version="1.0" fit="" height="100%"
							width="100%" preserveAspectRatio="xMidYMid meet"
							style="pointer-events: none; display: inline-block;" fill="rgba(255,223,110,1)">
							<path
								d="M12.38 19.737l4.765 9.59 12.18-26.655L2.674 15.464l9.706 4.273zm.282-1.04l-7.44-3.275 20.434-9.807-12.993 13.082zm4.444 8.17l-3.688-7.422 13.11-13.198-9.422 20.62z">
							</path>
						</svg>
					</div>
					<div class="info">
						<div class="title">THẾ MẠNH 1</div>
						<div class="des">Bạn có gì đặc biệt? </div>
					</div>
				</div>
				<div class="grid-item">
					<div class="thumb">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27 32" version="1.0" fit="" height="100%"
							width="100%" preserveAspectRatio="xMidYMid meet"
							style="pointer-events: none; display: inline-block;" fill="rgba(255,223,110,1)">
							<path
								d="M18.804 18.457l-8.268 8.268-.004-.005c-.03.032-.056.067-.088.097-2.147 2.147-5.642 2.147-7.79 0C.57 24.732.517 21.382 2.48 19.224l1.102 1.102 1.743-1.742c2.34 1.116 5.22.712 7.16-1.225l2.967-2.968.742.742.742-.742-2.968-2.967 4.45-4.45-.74-.743-4.452 4.45-2.967-2.966 4.45-4.45-.742-.743-4.45 4.45L6.55 4.008l-.742.742.742.74L3.582 8.46c-1.937 1.937-2.34 4.82-1.224 7.16l-1.743 1.74 1.122 1.124c-2.372 2.568-2.317 6.583.176 9.076 2.556 2.557 6.716 2.557 9.272 0l8.36-8.36c1.833-1.832 4.814-1.832 6.646 0l.743-.742c-2.24-2.24-5.89-2.24-8.13 0zM4.324 9.2l2.968-2.967 7.417 7.417-2.968 2.967c-2.045 2.045-5.372 2.045-7.418 0s-2.045-5.372 0-7.418zm-1.417 7.35c.202.284.422.556.675.81s.527.473.808.674l-.808.808L2.1 17.36l.807-.81z">
							</path>
						</svg>
					</div>
					<div class="info">
						<div class="title">THẾ MẠNH 2</div>
						<div class="des">Bạn có gì đặc biệt? </div>
					</div>
				</div>
				<div class="grid-item">
					<div class="thumb">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 32" version="1.0" fit="" height="100%"
							width="100%" preserveAspectRatio="xMidYMid meet"
							style="pointer-events: none; display: inline-block;" fill="rgba(255,223,110,1)">
							<path
								d="M26.667 9.867l-.96.96C23.627 9.014 20.96 8 18.187 8c-1.867 0-3.733.48-5.333 1.333l4.053-4.053c.32.213.693.32 1.067.32.533 0 1.067-.213 1.493-.64.853-.853.853-2.187 0-3.04-.427-.427-.96-.64-1.493-.64s-1.067.213-1.493.64c-.692.747-.8 1.813-.32 2.613l-5.12 5.12-.96-.96-2.612 2.613.96.96L3.2 17.493c-.32-.213-.692-.32-1.066-.32-.533 0-1.067.213-1.493.64-.852.853-.852 2.187 0 3.04.428.373.96.587 1.494.587s1.067-.213 1.493-.64c.693-.693.8-1.76.32-2.613L8 14.134C5.867 18.24 6.347 23.36 9.493 26.987L8.533 28l2.667 2.613L13.813 28 11.2 25.387l-.907.907C7.2 22.667 7.04 17.44 9.653 13.6l.427.428 2.667-2.613-.48-.427c1.707-1.227 3.787-1.867 5.92-1.867 2.507 0 4.853.908 6.773 2.508l-.96.907 2.667 2.613 2.613-2.613-2.613-2.667zM12.32 28l-1.12 1.12L10.08 28l1.12-1.12L12.32 28zm4.907-25.28c.213-.213.48-.32.747-.32s.533.107.747.32c.428.427.428 1.067 0 1.493-.212.213-.48.32-.746.32s-.533-.107-.747-.32c-.427-.373-.427-1.067 0-1.493zM2.88 20.053c-.213.213-.48.32-.747.32s-.533-.107-.747-.32c-.213-.16-.32-.427-.32-.747 0-.267.107-.533.32-.747s.48-.32.747-.32.533.106.747.32c.427.426.427 1.12 0 1.492zm7.147-7.52l-1.12-1.12 1.12-1.12 1.12 1.12-1.12 1.12zm16.64 1.12l-1.12-1.12 1.12-1.12 1.12 1.12-1.12 1.12z">
							</path>
						</svg>
					</div>
					<div class="info">
						<div class="title">THẾ MẠNH 3</div>
						<div class="des">Bạn có gì đặc biệt? </div>
					</div>
				</div>
				<div class="grid-item">
					<div class="thumb">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23 32" version="1.0" fit="" height="100%"
							width="100%" preserveAspectRatio="xMidYMid meet"
							style="pointer-events: none; display: inline-block;" fill="rgba(255,223,110,1)">
							<path
								d="M3.152 14.163c0 5.504 4.46 9.965 9.965 9.965 5.506 0 9.967-4.46 9.967-9.965s-4.46-9.966-9.967-9.966c-5.503 0-9.965 4.46-9.965 9.966zm9.965-8.917c4.917 0 8.918 4 8.918 8.917s-4 8.916-8.918 8.916c-4.916 0-8.916-4-8.916-8.917s4-8.917 8.917-8.917z">
							</path>
							<path
								d="M19.06 25.862l.504 1.02.94-.465-1.425-2.88-.94.466.454.917c-1.687.86-3.566 1.315-5.476 1.315-6.655 0-12.068-5.416-12.068-12.073 0-4.535 2.57-8.695 6.582-10.75l.488.985.94-.466-1.427-2.878-.94.466.474.955C2.8 4.703 0 9.228 0 14.163c0 7.06 5.604 12.83 12.594 13.108v1.597c-2.422.094-4.678.84-6.59 2.08h2.193c1.502-.673 3.165-1.05 4.914-1.05 1.72 0 3.385.373 4.904 1.05h2.204c-1.937-1.25-4.2-1.982-6.575-2.08v-1.6c1.89-.076 3.74-.554 5.416-1.406z">
							</path>
						</svg>
					</div>
					<div class="info">
						<div class="title">THẾ MẠNH 4</div>
						<div class="des">Bạn có gì đặc biệt? </div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="product-grid sale-off mb50">
		<div class="container">
			<div class="title">
				<h1 class="heading">KHUYẾN MÃI</h1>
				<h3 class="subheading">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
			</div>
			<div class="content flex-between">
				<div class="grid-item">
					<div class="thumb" data-label="10%">
						<img src="https://static.ladipage.net/s400x500/uploads/images/5d81d6e7-070a-4e06-8188-e5cec04eb11c.jpg"
							alt="">
					</div>
					<div class="title">Áo khoác da cao cấp 2016</div>
					<div class="info">
						<div class="price"><b>1.000.000đ</b></div>
						<div class="rating">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
						</div>
					</div>
				</div>
				<div class="grid-item">
					<div class="thumb" data-label="30%">
						<img src="https://static.ladipage.net/s400x500/uploads/images/2da5a361-acb8-49e4-be72-1096bdaeadac.jpg"
							alt="">
					</div>
					<div class="title">Áo khoác da cao cấp 2016</div>
					<div class="info">
						<div class="price"><b>1.000.000đ</b></div>
						<div class="rating">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
						</div>
					</div>
				</div>
				<div class="grid-item">
					<div class="thumb" data-label="20%">
						<img src="https://static.ladipage.net/s400x500/uploads/images/d510cf53-6071-4364-89d8-709f5dd29a64.jpeg"
							alt="">
					</div>
					<div class="title">Áo khoác da cao cấp 2016</div>
					<div class="info">
						<div class="price"><b>1.000.000đ</b></div>
						<div class="rating">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
						</div>
					</div>
				</div>
				<div class="grid-item">
					<div class="thumb" data-label="10%">
						<img src="https://static.ladipage.net/s400x500/uploads/images/a368b735-97f8-40c7-b810-86441aabd89e.jpg"
							alt="">
					</div>
					<div class="title">Áo khoác da cao cấp 2016</div>
					<div class="info">
						<div class="price"><b>1.000.000đ</b></div>
						<div class="rating">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="100%" height="100%" viewBox="0 0 24 24" fill="rgba(255,214,0,1)">
								<path
									d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
								</path>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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
                <div class="zalo-group-gv88 hidden-xs">
                    <div id="widget-btn-zalo" class="widget-btn-float-container widget-tooltip">
                        <a target="_blank" href="https://zalo.me/0972542111" class="widget-btn-float zalo-color widget-menu-zalo">
                            <span class="button_tap"></span>
                        </a>
                        <div class="widget-tooltiptext" style="cursor: pointer;  background-color: rgba(29, 36, 62, 0.7); ">Chat với chúng tôi qua Zalo
                        </div>
                    </div>
                </div>
                <div class="question-popup-gv88 hidden-xs">
                    <div id="widget-btn-contact_form" class="widget-btn-float-container widget-tooltip">
                        <a href="javascript:void(0);" id="chat-feedback-customer" class="widget-menu-contact-form">
                            <span class="button_tap active"></span>
                        </a>
                        <div class="widget-tooltiptext" style="cursor: pointer;  background-color: rgba(29, 36, 62, 0.7); ">Để lại lời nhắn cho chúng tôi
                        </div>
                    </div>
                </div>
                <div class="facebook-messager-gv88 hidden-xs">
                    <div id="widget-btn-facebook" class="widget-btn-float-container widget-tooltip">
                        <a href="javascript:void(0);" class="widget-menu-facebook">
                            <span class="button_tap"></span></a>
                        <!-- Load Facebook SDK for JavaScript -->
                        <div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div><iframe name="fb_xdm_frame_https" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://staticxx.facebook.com/connect/xd_arbiter.php?version=44#channel=f270616512ede2c&amp;origin=https%3A%2F%2Fgiupviec88.yez.vn" style="border: none;"></iframe></div><div></div></div><div class="fb-customerchat fb_invisible_flow fb_iframe_widget" attribution="setup_tool" page_id="1434986156636938" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;attribution=setup_tool&amp;container_width=0&amp;locale=vi_VN&amp;page_id=1434986156636938&amp;sdk=joey"><span style="vertical-align: bottom; width: 1000px; height: 0px;"><iframe name="f2af14306e5813" width="1000px" height="1000px" title="" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v4.0/plugins/customerchat.php?app_id=&amp;attribution=setup_tool&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df9ccd9d6eaea68%26domain%3Dgiupviec88.yez.vn%26origin%3Dhttps%253A%252F%252Fgiupviec88.yez.vn%252Ff270616512ede2c%26relation%3Dparent.parent&amp;container_width=0&amp;locale=vi_VN&amp;page_id=1434986156636938&amp;sdk=joey" style="border: none; visibility: visible; width: 288pt; height: 211px; border-radius: 9pt; bottom: 63pt; padding: 0px; position: fixed; right: 9pt; top: auto; z-index: 2147483647; max-height: 0px;" class="" data-testid="dialog_iframe"></iframe></span></div><div class="fb-customerchat fb_invisible_flow fb_iframe_widget" attribution="setup_tool" page_id="1434986156636938" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;attribution=setup_tool&amp;container_width=0&amp;locale=vi_VN&amp;page_id=1434986156636938&amp;sdk=joey"><span style="vertical-align: bottom; width: 1000px; height: 0px;"><iframe name="f51d250d54009c" width="1000px" height="1000px" title="" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v4.0/plugins/customerchat.php?app_id=&amp;attribution=setup_tool&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D44%23cb%3Df29466794f7d9a%26domain%3Dgiupviec88.yez.vn%26origin%3Dhttps%253A%252F%252Fgiupviec88.yez.vn%252Ff270616512ede2c%26relation%3Dparent.parent&amp;container_width=0&amp;locale=vi_VN&amp;page_id=1434986156636938&amp;sdk=joey" style="border: none; visibility: visible; width: 288pt; height: 211px; border-radius: 9pt; bottom: 63pt; padding: 0px; position: fixed; right: 9pt; top: auto; z-index: 2147483647; max-height: 0px;" class=" fb_customer_chat_bounce_out_v2" data-testid="dialog_iframe"></iframe></span></div><div class="fb_dialog  fb_dialog_advanced fb_customer_chat_bubble_animated_no_badge" style="background: none; border-radius: 50%; bottom: 18pt; display: none; height: 45pt; padding: 0px; position: fixed; right: 18pt; top: auto; width: 45pt; z-index: 2147483646;"><div class="fb_dialog_content" style="background: none;"><iframe name="blank_f2af14306e5813" width="60px" tabindex="-1" data-testid="bubble_iframe" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v4.0/plugins/customer_chat/bubble" style="border: none;"></iframe></div></div><div class="fb_dialog  fb_dialog_advanced fb_customer_chat_bubble_animated_no_badge fb_customer_chat_bubble_pop_in" style="background: none; border-radius: 50%; bottom: 18pt; display: inline; height: 45pt; padding: 0px; position: fixed; right: 18pt; top: auto; width: 45pt; z-index: 2147483646;"><div class="fb_dialog_content" style="background: none;"><iframe name="blank_f51d250d54009c" width="60px" tabindex="-1" data-testid="bubble_iframe" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v4.0/plugins/customer_chat/bubble" style="border: none;"></iframe></div></div></div>
                        <script>
                            window.fbAsyncInit = function() {
                            FB.init({
                                xfbml            : true,
                                version          : 'v4.0'
                            });
                            };

                            (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>

                        <!-- Your customer chat code -->
                        
                        <!-- Your customer chat code -->
                        
                        <div class="widget-tooltiptext" style="cursor: pointer;  background-color: rgba(29, 36, 62, 0.7); ">Chat ngay để nhận tư vấn</div>
                    </div>
                </div>
                <div class="tawk-to-gv88">
                    <div id="widget-btn-tawk_to" class="widget-btn-float-container widget-tooltip">
                        <a href="javascript:void(0);" class="widget-menu-tawk-to" data-action="widget_current_channel = 'tawk_to'; penTawkToPopup();">
                            <span class="button_tap"></span>
                        </a>
                        <!--Start of Tawk.to Script-->
                        <script type="text/javascript">
                        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
                        (function(){
                        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                        s1.async=true;
                        s1.src='https://embed.tawk.to/5da97f5b78ab74187a5a4479/default';
                        s1.charset='UTF-8';
                        s1.setAttribute('crossorigin','*');
                        s0.parentNode.insertBefore(s1,s0);
                        })();
                        </script>
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
    {!!$setting->custom_js!!}
</body>

</html>