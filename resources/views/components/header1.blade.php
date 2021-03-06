<header class="fixed-top">
    <div class="topnav">
        <div class="container pe-0">
            <div class="topnav-left float-start">
                <i class=""></i>
                <a href="/mobile-apps/" target="_blank" rel="noopener noreferrer" class="css-7k41it">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Australia's Best Online Shopping &amp; Price Comparison Site</font>
                    </font>
                </a>
            </div>
            <div class="topnav-right float-end">
                <a href="{{ route('about') }}" target="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">About PricePond</font>
                    </font>
                </a>
                <a href="">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">PricePond Partners</font>
                    </font>
                </a>
                <a href="{{ route('events') }}">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Current Events</font>
                    </font>
                </a>
                <a href="{{ route('deals') }}">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Best Deals</font>
                    </font>
                </a>
                <a href="{{ route('contact') }}">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Contact Us</font>
                    </font>
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Header -->
    <div class="wsmobileheader clearfix">
        <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        <span class="smllogo"><img src="{{ asset('images/logo.png') }}" width="80" alt="" /></span>
        <div class="wssearch clearfix">
            <i class="wsopensearch fas fa-search"></i>
            <i class="wsclosesearch fas fa-times"></i>
            <div class="wssearchform clearfix">
                <form>
                    <input type="text" placeholder="Search Here">
                </form>
            </div>
        </div>
    </div>
<!-- Mobile Header -->
    
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light">
        <div class="container align-items-stretch pt-2">
            <a class="navbar-brand" href="{{ route('home') }}" style="">
                <img alt="pp-logo" class="pp-logo" src="{{ asset('images/logo.png') }}">
            </a>
            @include('chunks.megamenup')
            <div class="search-div-1">            
                <div class="search-div">
                    <div id="custom-search-input">
                        <form action="{{ route('search') }}" method="GET">
                            <div class="input-group col-md-12">
                                <input type="text" name="q" class="search-query form-control" 
                                placeholder="Search Items Here . . ." 
                                value = "@if(isset($query) && $query!=NULL) {{ $query }} @endif" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="nav-bottom">
                    <div class="top-cats">
                        <a href="#">Laptops</a>
                        <a href="#">Smart Phones</a>
                        <a href="#">Washing Machines</a>
                        <a href="#">Refrigerators</a>
                        <a href="#">Printers</a>
                        <a href="#">Monitors</a>
                    </div>
                </div>
            </div>
            <div class="nav navbar-nav right-menu">
                <div class="nav-buttons">
                    <div class="row">
                        <div class="col-12 px-1">
                            <button class="btn btn-nav nav-login w-100">Merchant Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
