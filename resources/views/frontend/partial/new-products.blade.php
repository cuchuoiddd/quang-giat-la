@php
    $limit_block_products = isset($setting->limit_block_products) && $setting->limit_block_products >= 0 ? $setting->limit_block_products : 4;
    $featuredProducts = Helper::getFeaturedProducts($limit_block_products);
@endphp

<section class="product-grid new-product mb50">
    <div class="container">
        <div class="title">
            <h1 class="heading">{{isset($setting->new_product_heading) ? $setting->new_product_heading : '' }}</h1>
            <h3 class="subheading">{{isset($setting->new_product_subheading) ? $setting->new_product_subheading : '' }}</h3>
        </div>
        <div class="content flex-between owl-carousel">
            @if(isset($featuredProducts))
                @foreach($featuredProducts as $product)
                    @php
                    $images = json_decode($product['images']);
                    @endphp
                    <div class="grid-item">
                        <div class="thumb" @if(isset($product->discount_percent) && $product->discount_percent > 0) data-label="{{$product->discount_percent}}%" @endif>
                            @if(isset($images[0]))
                            <img src="{{url($images[0]->url)}}" alt="{{$product['title']}}" alt="{{$images[0]->alt}}">
                            @else
                            <img src="{{url('/images/product/noimage.png')}}" alt="{{$product['title']}}"
                                class="">
                            @endif
                        </div>
                        <div class="title">{{$product->title}}</div>
                        <div class="info">
                            <div class="price"><b>{{(isset($product['price']) && $product['price']!= 0) ? number_format($product['price'], 0, '', ',').'đ' : ''}}</b></div>
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
                @endforeach
            @endif
        </div>
    </div>
</section>
