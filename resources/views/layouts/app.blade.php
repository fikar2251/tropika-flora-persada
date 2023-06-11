<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
</head>

<body>
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <script src="{{ asset('assets2/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets2/js/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets2/js/aos.js') }}"></script>
    <script src="{{ asset('assets2/js/navbar.js') }}"></script>
    <script src="{{ asset('assets2/js/counter.js') }}"></script>
    <script src="{{ asset('assets2/js/custom.js') }}"></script>
    <script src="https://kit.fontawesome.com/49f2b2e2cb.js" crossorigin="anonymous"></script>
    @stack('custom-scripts')
</body>

</html>
