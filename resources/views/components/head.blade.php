{{-- Online CDN CSS Files --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

{{-- FONTAWESOME --}}
<link rel="stylesheet" href="{{ asset('fontawesome/source/all.min.css') }}">

{{-- Google Fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

{{-- Mega Menu --}}
<link rel="stylesheet" href="{{ asset('webslidemenu/dropdown-effects/fade-down.css') }}">
<link rel="stylesheet" href="{{ asset('webslidemenu/webslidemenu.css') }}">

{{-- Custom CSS Files --}}
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/form-style.css') }}">
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

@yield('extra-head')