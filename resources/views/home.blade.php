@include('head')
<body style="background-color: @include('color');">
@auth
<div class="container position-absolute top-50 start-50 translate-middle">
<div class="card mt-5 mb-5">
  <div class="card-header">
    <h3>Confirm</h3>
  </div>
  <div class="card-body">
    <p class="card-text">You are already logged in as {{Auth::user()->name}}, you need to log out before logging in as different user.</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-dark" style="width:100%">Logout</button>
      </form>
    <a href="/dashboard" class="btn btn-light border-secondary float-right mt-2" style="width:100%">Cancel</a>
  </div>
</div>
</div>
@endauth
@guest
@include('nvb')
<div style="background-attachment:fixed; background-repeat: no-repeat; background-position:center;">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.ibb.co/Pjwf8wr/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/tLMq1Xr/2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/8xmXWTK/3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://i.ibb.co/jM6JsXg/4.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

</div>
</body>
@include('foot')
@endguest
