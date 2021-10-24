@include('head')
<body style="background-color: @include('color');scroll-behavior: smooth;">
<!-- Navbar -->
@include('nvb')
@include('message')

<div class="container d-flex justify-content-center mt-4 mb-4">
                @yield('content')
        </div>
</div>
</body>
@include('foot')