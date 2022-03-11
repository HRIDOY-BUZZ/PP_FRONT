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
                <div class="product-details">
                    <p><b>SHOP NAME: </b>
                        <a href="{{ url('store/'.$data->Shop.'/'.urlencode($data->shop_name)) }}">
                            <b>
                                {{ $data->shop_name }} 
                                <i class="fal fa-share-square"></i>
                            </b>
                        </a>
                        <img class="shop-image" src="{{ $sim_root.$data->shop_image }}" alt="">
                    </p>
                    <p><b>MANUFACTURER: </b>{{ $data->Manufacturer }}</p>
                    <p class="price"><b>PRICE: </b>
                        <span class="amount">{{ $data->Price }}</span>
                        <span class="currency"> AUD </span></p>
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