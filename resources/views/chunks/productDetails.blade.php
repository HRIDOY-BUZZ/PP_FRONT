{{-- {{ print_r($data) }} --}}

<div class="product-banner py-3 mt-3 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="product-img">
                    @if($data->Image == "")
                    <img src="{{ $data->ImageURL }}" alt="">
                    @else
                    <img src="{{ $pim_root.$data->Shop.'/'.$data->Image }}" alt="">
                    @endif
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-8 col-sm-6 col-12">
                <h2 class="text-dark">{{ $data->Name }}</h2>
                <div class="product-dets">
                    <div class="shop-details">
                        <p><b>SHOP NAME: </b>
                            <a href="{{ url('store/'.$data->Shop.'/'.urlencode($data->shop_name)) }}">
                                <b>
                                    {{ $data->shop_name }} 
                                    <i class="fal fa-share-square"></i>
                                </b>
                            </a>
                        </p>
                        <div class="shop-image">
                            <img src="{{ $sim_root.$data->shop_image }}" alt="">
                        </div>
                    </div>
                    @if($data->Manufacturer != NULL && $data->Manufacturer != "")
                    <p><b>MANUFACTURER: </b>{{ $data->Manufacturer }}</p>
                    @endif
                    @if ($data->Category != NULL && $data->Category != "")
                    <p><b>CATEGORY: </b>{{ $data->Category }}</p>
                    @endif
                    <p class="price"><b>PRICE: </b>
                        <span class="amount">{{ $data->Price }}</span>
                        <span class="currency"> AUD </span>
                        <a href="{{ $data->URL }}" class="btn btn-primary btn-pp">BUY NOW</a>
                    </p>
                    <p style="text-align: justify">
                        @if(strlen($data->Description)>0)
                            <b>DESCRIPTION: </b>{{ $data->Description }}
                        @endif
                    </p>
                </div>
            </div>
            <div class="col-12">
                
            </div>
        </div>
    </div>
</div>