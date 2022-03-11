<div class="store-banner py-3 mt-3 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="store-img">
                    <img src="{{ $img_root.$shop->Image }}" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-8 col-sm-6 col-6">
                <h2 class="text-dark">{{ $shop->shop_name }}</h2>
                <p><b>Shop ID: </b>{{ $shop->shop_id }}</p>
                <p>
                    <b>Shop Location: </b>
                    {{ $shop->shop_street }}
                    @if(isset($shop->shop_country) && strlen($shop->shop_country)>2)
                        {{ ", ".$shop->shop_country }}
                    @endif
                </p>
                <p><b>Total Products: </b>{{ $shop->total }}</p>
                <p><a href="{{ $shop->shop_url }}" target="_blank">
                        <b>
                            Visit Shop 
                            <i class="fal fa-share-square"></i>
                        </b>
                    </a>
                </p>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <p style="text-align: justify">
                    @if(strlen($shop->introductiontext)>0)
                        <b>ABOUT: </b>{{ substr($shop->introductiontext,0,600) }}...
                        <a href="" data-bs-toggle="modal" data-bs-target="#descModal">Learn More</a>
                    @endif
                </p>
            </div>
        </div>
    </div>
</div>