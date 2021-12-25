<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('components.head')
    @yield('extra-head')
</head>
<body>
    <div class="page-wrapper">
        @include('components.header1')

        <main class="container">
            @yield('content')
        </main>

        @include('components.footer')
        @include('components.foot')
    </div>
</body>
</html>