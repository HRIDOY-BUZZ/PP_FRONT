@php
    $eim_root = "https://www.pricepond.com.au/event_banners/";
    $pim_root = "https://www.pricepond.com.au/prod_img/";
@endphp
<div class="container">
    <div class="row">
        <div class="col-12">
            @include('chunks.eventBanner')
        </div>
        <div class="col-lg-2">
            <div >
                <div class="search-sidebar">
                    <form action="" class="form-control my-3 d-lg-block d-none">
                        <center>
                            <label for="" class="fw-bold">
                                SHOPS
                            </label>
                        </center>
                        <div class="sidebar-cats ms-2">
                            @foreach ($shops as $shop)
                                <a href="{{ url('store/'.$shop['Shop'].'/'.encodeUrl($shop['shop_name'])) }}">
                                    {{ substr($shop['shop_name'],0,30) }}
                                </a>
                            @endforeach
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="row">
                <div class="col-lg-10">
                </div>
            </div>
            <div>
                @include('chunks.eventProducts')
            </div>
        </div>
    </div>
</div>