@php
    $featuredCollections = Helper::getFeaturedCollections(4);
@endphp
<section class="featured mb50">
    <div class="container">
        <div class="flex-between flex-wrap-mobile">
            <div class="block">
                <div class="thumb">
                    <img
                        src="{{url(count($featuredCollections) && isset($featuredCollections[0])? $featuredCollections[0]->image:'')}}"
                        alt="{{count($featuredCollections) && isset($featuredCollections[0])?$featuredCollections[0]->title:''}}">
                </div>
                <div class="content pos-bot-right">
                    <h2 class="heading with-underline">{{count($featuredCollections) && isset($featuredCollections[0])?$featuredCollections[0]->title:''}}</h2>
                    <h2 class="subheading">{{count($featuredCollections) && isset($featuredCollections[0])?$featuredCollections[0]->description:''}}</h2>
                </div>
            </div>
            <div class="block flex-between flex-column auto-at-mobile">
                <div class="sub block">
                    <div class="thumb">
                        <img src="{{url(count($featuredCollections) && isset($featuredCollections[1])? $featuredCollections[1]->image:'')}}"
                             alt="{{count($featuredCollections) && isset($featuredCollections[1])?$featuredCollections[1]->title:''}}">
                    </div>
                    <div class="content pos-center">
                        <h2 class="heading">{{count($featuredCollections) && isset($featuredCollections[1])?$featuredCollections[1]->title:''}}</h2>
                        <h2 class="subheading with-topline">{{count($featuredCollections) && isset($featuredCollections[1])?$featuredCollections[1]->description:''}}</h2>
                    </div>
                </div>
                <div class="sub block">
                    <div class="thumb">
                        <img src="{{url(count($featuredCollections) && isset($featuredCollections[2])? $featuredCollections[2]->image:'')}}"
                             alt="{{count($featuredCollections) && isset($featuredCollections[2])?$featuredCollections[2]->title:''}}">
                    </div>
                    <div class="content pos-center">
                        <h2 class="heading">{{count($featuredCollections) && isset($featuredCollections[2])?$featuredCollections[2]->title:''}}</h2>
                        <h2 class="subheading with-topline">{{count($featuredCollections) && isset($featuredCollections[2])?$featuredCollections[2]->description:''}}</h2>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="thumb">
                    <img src="{{url(count($featuredCollections) && isset($featuredCollections[3])? $featuredCollections[3]->image:'')}}"
                         alt="{{count($featuredCollections) && isset($featuredCollections[3])?$featuredCollections[3]->title:''}}">
                </div>
                <div class="content pos-bot-left">
                    <h2 class="heading with-underline">{{count($featuredCollections) && isset($featuredCollections[3])?$featuredCollections[2]->title:''}}</h2>
                    <h2 class="subheading">{{count($featuredCollections) && isset($featuredCollections[3])?$featuredCollections[3]->description:''}}</h2>
                </div>
            </div>
        </div>
    </div>
</section>
