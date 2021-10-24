@include('head')
<body style="background-color: @include('color');scroll-behavior: smooth;">
<!-- Navbar -->
@include('nvb')
@include('message')

<div class="container d-flex justify-content-center mt-4 mb-4">
            <div class="col-6 col-md-5">
                @yield('content')
            </div>
        </div>
</div>
</body>
@include('foot')