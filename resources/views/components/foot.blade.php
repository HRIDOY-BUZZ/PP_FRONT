<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>

{{-- FONTAWESOME --}}
{{-- <script src="https://www.xitsolution.com/fontawesome/source/all.min.js"></script> --}}

{{-- Mega Menu --}}
<script src="{{ asset('webslidemenu/webslidemenu.js') }}"></script>

{{-- Custom JS Files --}}
<script src="{{ asset('js/navbar.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/secondary.js') }}"></script>

@yield('extra-foot')
