<div class="container mt-5">
    <center>
        <h1><b>PRICEPOND EVENTS</b></h1>
    </center>
    <h2>CURRENT EVENTS:</h2>
    <div class="row">
        @foreach ($data as $d)
            @if($d->status == 1)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    {{ print_r($d) }}
                    <br>
                </div>
            @endif
        @endforeach
    </div>
    <h2>UPCOMING EVENTS:</h2>
    <div class="row">
        @foreach ($data as $d)
            @if($d->status != 1)
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    {{ print_r($d) }}
                    <br>
                </div>
            @endif
        @endforeach
    </div>
</div>