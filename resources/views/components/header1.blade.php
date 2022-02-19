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
                <a href="" target="_blank">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">About PricePond</font>
                    </font>
                </a>
                <a href="" target="_blank">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">PricePond Partners</font>
                    </font>
                </a>
                <a href="" target="_blank">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Current Events</font>
                    </font>
                </a>
                <a href="" class="" target="_blank">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Best Deals</font>
                    </font>
                </a>
                <a href="" target="_blank">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Contact Us</font>
                    </font>
                </a>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm bg-light">
        <div class="container align-items-stretch">
            <a class="navbar-brand" href="{{ route('home') }}" style="">
                <img alt="pp-logo" class="pp-logo" src="{{ asset('images/logo.png') }}">
            </a>


            {{-- categories starts here --}}
                        {{-- <a class="nav-link categories dropdown-toggle d-flex" href="#" data-bs-toggle="dropdown">
                            <p class="cat-title my-2">Categories <i class="far fa-chevron-down"></i></p>
                        </a> --}}
            


                        <ul class="navbar-nav h-100">
                            <li class="nav-item dropdown">
                                {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" >
                                Dropdown link
                                </a> --}}
                            <button class="no-click" disabled> <a id="navbarDropdownMenuLink" class="nav-link categories dropdown-toggle d-flex" href="#" data-bs-toggle="dropdown">
                                <p class="cat-title my-2">Categories <i class="far fa-chevron-down"></i></p>
                            </a> </button>
    
                                <ul class="dropdown-menu dropdown-menu-1 " aria-labelledby="navbarDropdownMenuLink">
                                    <!-- nested dropdown -->
                                    <li class="nav-item  dropdown dropdown-2 ">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" >
                                        Nested link-1
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-2 drop-first" aria-labelledby="navbarDropdownMenuLink">
                                        <div class="row">
                                            <div class="col col-6 col-md-4 ">
                                                <li><a class="dropdown-item" href="#">Action of link-1</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">point-3</a></li>
                                                <li><a class="dropdown-item" href="#">point-4</a></li>
                                            </div>
                                            <div class="col col-6 col-md-4">
                                                <li><a class="dropdown-item" href="#">point-5</a></li>
                                                <li><a class="dropdown-item" href="#">point-6</a></li>
                                                <li><a class="dropdown-item" href="#">point-7</a></li>
                                                <li><a class="dropdown-item" href="#">point-8</a></li>
                                            </div>
                                            <div class="col col-6 col-md-4">
                                                <li><a class="dropdown-item" href="#">point-9</a></li>
                                                <li><a class="dropdown-item" href="#">point-10</a></li>
                                                <li><a class="dropdown-item" href="#">point-11</a></li>
                                                <li><a class="dropdown-item" href="#">point-12</a></li>
                                                <li><a class="dropdown-item" href="#">point-13</a></li>
                                                <li><a class="dropdown-item" href="#">point-14</a></li>
                                                <li><a class="dropdown-item" href="#">point-15</a></li>
                                                <li><a class="dropdown-item" href="#">point-16</a></li>
                                                <li><a class="dropdown-item" href="#">point-17</a></li>
                                                <li><a class="dropdown-item" href="#">point-18</a></li>
                                            </div>
                                        </div>
                                            
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown dropdown-2 ">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" >
                                        Nested link-2
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-2" aria-labelledby="navbarDropdownMenuLink">
                                        <div class="row">
                                            <div class="col col-6 col-md-4">
                                                <li><a class="dropdown-item" href="#">link-Action-2</a></li>
                                                <li><a class="dropdown-item" href="#">Another action-2</a></li>
                                                <li><a class="dropdown-item" href="#">point-2-3</a></li>
                                                <li><a class="dropdown-item" href="#">point-2-4</a></li>
                                            </div>
                                            <div class="col col-6 col-md-4">
                                                <li><a class="dropdown-item" href="#">point-9</a></li>
                                                <li><a class="dropdown-item" href="#">point-10</a></li>
                                                <li><a class="dropdown-item" href="#">point-11</a></li>
                                                <li><a class="dropdown-item" href="#">point-12</a></li>
                                                <li><a class="dropdown-item" href="#">point-13</a></li>
                                                <li><a class="dropdown-item" href="#">point-14</a></li>
                                                <li><a class="dropdown-item" href="#">point-15</a></li>
                                                <li><a class="dropdown-item" href="#">point-16</a></li>
                                                <li><a class="dropdown-item" href="#">point-17</a></li>
                                                <li><a class="dropdown-item" href="#">point-18</a></li>
                                            </div>
                                        </div>
                                            
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown dropdown-2 ">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" >
                                        Nested link-3
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-2" aria-labelledby="navbarDropdownMenuLink">
                                        <div class="row">
                                            <div class="col col-6 col-md-4">
                                                <li><a class="dropdown-item" href="#">nested-Action-3</a></li>
                                                <li><a class="dropdown-item" href="#">Another action-3</a></li>
                                                <li><a class="dropdown-item" href="#">point-3-3</a></li>
                                                <li><a class="dropdown-item" href="#">point-3-4</a></li>
                                            </div>
                                            <div class="col col-6 col-md-4">
                                                <li><a class="dropdown-item" href="#">point-5</a></li>
                                                <li><a class="dropdown-item" href="#">point-6</a></li>
                                                <li><a class="dropdown-item" href="#">point-7</a></li>
                                                <li><a class="dropdown-item" href="#">point-8</a></li>
                                            </div>
                                        </div>
                                            
                                        </ul>
                                    </li>
    
                                    <li class="nav-item dropdown dropdown-2 ">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" >
                                        Nested link-4
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-2" aria-labelledby="navbarDropdownMenuLink">
                                            <div class="row">
                                                <div class="col col-6 col-md-4">
                                                    <li><a class="dropdown-item" href="#">nl-link-4</a></li>
                                                    <li><a class="dropdown-item" href="#">sction-4</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-3</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-4</a></li>
                                                </div>
                                                <div class="col col-6 col-md-4">
                                                    <li><a class="dropdown-item" href="#">test-4-5</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-6</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-7</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-8</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-9</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-10</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-11</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-12</a></li>
                                                    
                                                </div>
                                                <div class="col col-6 col-md-4">
                                                    <li><a class="dropdown-item" href="#">point-4-5</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-6</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-7</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-8</a></li>
                                                </div>
                                            </div>
                                            
                                        </ul>
                                    </li>
    
                                    <li class="nav-item dropdown dropdown-2 ">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" >
                                        Nested link-5
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-2" aria-labelledby="navbarDropdownMenuLink">
                                            <div class="row">
                                                <div class="col col-6 col-md-4">
                                                    <li><a class="dropdown-item" href="#">NL-5</a></li>
                                                    <li><a class="dropdown-item" href="#">sction-4</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-3</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-4</a></li>
                                                </div>
                                                <div class="col col-6 col-md-4">
                                                    <li><a class="dropdown-item" href="#">test-4-5</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-6</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-7</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-8</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-9</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-10</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-11</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-12</a></li>
                                                    
                                                </div>
                                                <div class="col col-6 col-md-4">
                                                    <li><a class="dropdown-item" href="#">point-4-5</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-6</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-7</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-8</a></li>
                                                </div>
                                            </div>
                                            
                                        </ul>
                                    </li>
    
                                    <li class="nav-item dropdown dropdown-2 ">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" >
                                        Nested link-6
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-2" aria-labelledby="navbarDropdownMenuLink">
                                            <div class="row">
                                                <div class="col col-6 col-md-4">
                                                    <li><a class="dropdown-item" href="#">link-6</a></li>
                                                    <li><a class="dropdown-item" href="#">sction-4</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-3</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-4</a></li>
                                                </div>
                                                <div class="col col-6 col-md-4">
                                                    <li><a class="dropdown-item" href="#">test-4-5</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-6</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-7</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-8</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-9</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-10</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-11</a></li>
                                                    <li><a class="dropdown-item" href="#">test-4-12</a></li>
                                                    
                                                </div>
                                                <div class="col col-6 col-md-4">
                                                    <li><a class="dropdown-item" href="#">point-4-5</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-6</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-7</a></li>
                                                    <li><a class="dropdown-item" href="#">point-4-8</a></li>
                                                </div>
                                            </div>
                                            
                                        </ul>
                                    </li>
    
                                </ul>
                            </li>
                        </ul>





















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
                    <div class="nav navbar-nav right-menu">
                        <div class="nav-buttons">
                                <div class="row ps-2">
                                    <div class="col-6 pe-1">
                                        <button class="btn btn-nav nav-login w-100">Login</button>
                                    </div>
                                    <div class="col-6 ps-1 pe-0">
                                        <button class="btn btn-nav nav-reg w-100">Register</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
        
                <div class="nav-bottom container">
                    <div class="top-cats mx-auto">
                        <a href="#">Laptops</a>
                        <a href="#">Smart Phones</a>
                        <a href="#">Washing Machines</a>
                        <a href="#">Refrigerators</a>
                        <a href="#">Printers</a>
                        <a href="#">Monitors</a>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>
