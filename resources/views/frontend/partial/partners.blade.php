@php
    $partners = Helper::getPartners(6);
@endphp
<section class="partner">
    <div class="container">
        <div class="content flex-between">
            @if(isset($partners))
                @foreach($partners as $partner)
                    <div class="grid-item">
                        <a href="{{$partner->url}}">
                        <div class="thumb">
                            <img src="{{url($partner->image)}}"
                                alt="">
                        </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>