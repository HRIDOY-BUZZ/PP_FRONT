<footer class="text-center text-lg-start text-dark">
    <!-- Section: Social media -->
    <section id="social-sec">
        <div class="container d-flex justify-content-between text-black">
            <!-- Left -->
            <div class="me-5">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="text-black me-4">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="text-black me-4">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="text-black me-4">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="text-black me-4">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="text-black me-4">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="text-black me-4">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </div>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="footer-links">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 me-auto mb-4">
                    <!-- Content -->
                    <a href="{{ route('home') }}">
                        <img alt="pp-logo" class="foot-logo" src="{{ asset('images/logo.png') }}">
                    </a>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 200px; background-color: #7c4dff; height: 2px"/>
                    <p style="text-align: justify">
                        Best Australian Online Shopping Sites PricePond makes
                        comparison shopping easy with Deal Alerts & Coupons. 
                        Compare Prices. Great Deals & Huge Savings Made Easy at Pricepond.com.au
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 col-sm-6 col-6 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Useful Links</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 83px; background-color: #7c4dff; height: 2px"/>
                    <p>
                        <a href="{{ route('home') }}" class="text-dark">Home</a>
                    </p>
                    <p>
                        <a href="{{ route('about') }}" class="text-dark">About Pricepond</a>
                    </p>
                    <p>
                        <a href="#!" class="text-dark">FAQs</a>
                    </p>
                    <p>
                        <a href="#!" class="text-dark">Contact Us</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 col-sm-6 col-6 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Legal</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 40px; background-color: #7c4dff; height: 2px"/>
                    <p>
                        <a href="{{ route('policy') }}" class="text-dark">Privacy Policy</a>
                    </p>
                    <p>
                        <a href="#!" class="text-dark">Terms and Conditions</a>
                    </p>
                    <p>
                        <a href="#!" class="text-dark">Cookies</a>
                    </p>
                    <p>
                        <a href="#!" class="text-dark">Desclaimer</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 ms-auto mb-md-0 mb-4">
                <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Contact</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 58px; background-color: #7c4dff; height: 2px"/>
                    <p><i class="fas fa-home mr-3"></i> Macquarie Fields, NSW 2564, Australia</p>
                    <p><i class="fas fa-envelope mr-3"></i> info@pricepond.com.au</p>
                    <p><i class="fas fa-phone mr-3"></i> 02 8091 2748</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)" >
        © {{ date("Y") }} Copyright:
        <a class="text-dark" href="#">Pricepond.com.au</a>
    </div>
      <!-- Copyright -->
    </footer>