<div class="container mt-5">
    <center>
        <h1><b>DISCOVER THE BEST DEALS ON PRICEPOND...</b></h1>
    </center>
    <div class="row">
        @foreach ($data as $d)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                {{ print_r($d) }}
                <br><br>
            </div>
        @endforeach
    </div>
</div>