@include('head')
<body style="background-color: white;">
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