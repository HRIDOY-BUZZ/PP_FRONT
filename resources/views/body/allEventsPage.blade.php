@php
    $root = "https://www.pricepond.com.au/event_images/";
    $placeholder = "event_ph.jpg";
@endphp
<div class="container">
    <center>
        <h1 class="py-5">
            PRICEPOND EVENTS
        </h1>
    </center>
    <h2>CURRENT EVENTS:</h2>
    <div class="row">
        @foreach ($data as $d)
            @if($d->status == 1)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="blocks">
                        <a href="{{ url('event/'.$d->id."/".encodeUrl($d->event_name)) }}">
                            <div class="card event">
                                <div class="card-img-top">
                                    <span>
                                        @if($d->image != NULL && $d->image != "")
                                            <img src="{{ $root.$d->image }}" alt="{{ $d->event_name }}">
                                        @else
                                            <img src="{{ $root.$placeholder }}" alt="{{ $d->event_name }}">
                                        @endif
                                    </span>
                                </div>
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3>
                                            @if(strlen($d->event_name)>20)
                                                {{ substr($d->event_name,0,20) }}...
                                            @else
                                                {{ $d->event_name }}
                                            @endif
                                        </h3>
                                    </div>
                                    <p class="card_text">
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <br>
                </div>
            @endif
        @endforeach
    </div>
    <h2 class="mt-5">UPCOMING EVENTS:</h2>
    <div class="row">
        @foreach ($data as $d)
            @if($d->status != 1)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="blocks">
                            <div class="card event">
                                <div class="card-img-top">
                                    <span>
                                        @if($d->image != NULL && $d->image != "")
                                            <img src="{{ $root.$d->image }}" alt="{{ $d->event_name }}">
                                        @else
                                            <img src="{{ $root.$placeholder }}" alt="{{ $d->event_name }}">
                                        @endif
                                    </span>
                                </div>
                                <div class="card-body">
                                    <div class="card-title">
                                        <h3>
                                            @if(strlen($d->event_name)>20)
                                                {{ substr($d->event_name,0,20) }}...
                                            @else
                                                {{ $d->event_name }}
                                            @endif
                                        </h3>
                                    </div>
                                    <p class="card_text">
                                    </p>
                                </div>
                            </div>
                    </div>
                    <br>
                </div>
            @endif
        @endforeach
    </div>
</div>