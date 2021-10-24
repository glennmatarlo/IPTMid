@auth
<nav class="navbar sticky-top" id="navBar" style="background-color: #23242a;padding-top: 10px;">
<a class="btn btn-lg" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  <img src="https://icon-library.com/images/icon-bars/icon-bars-2.jpg" width="40" height="40" alt="">
</a>
  <a class="navbar-brand" href="{{url('/dashboard')}}" style="margin-left: 30px;">
    <div class="container">
    <img src="https://i.ibb.co/4VmCHHD/CT1.png" width="140" height="50" alt="">
    </div>
  </a>
</nav>
@endauth
@guest
<nav class="navbar sticky-top" id="navBar" style="background-color: #23242a;padding-top: 10px;">
<a class="btn btn-lg" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  <img src="https://icon-library.com/images/icon-bars/icon-bars-2.jpg" width="40" height="40" alt="">
</a>
  <a class="navbar-brand" href="#" style="margin-left: 30px;">
    <div class="container">
    <img src="https://i.ibb.co/4VmCHHD/CT1.png" width="140" height="50" alt="">
    </div>
  </a>
</nav>
@endguest
<!--Off Canvas-->
@auth
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h3 class="offcanvas-title" id="offcanvasExampleLabel">
      <img src="https://i.ibb.co/0YF2dBK/CT2.png" width="140" height="50" alt="">
    </h3>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <hr class="my-4">
  <div class="offcanvas-body">
    <div>
    <ul class="nav flex-column">
      <li class="nav-item d-inline">
        <a class="nav-link d-inline active d-flex tran" aria-current="page" href="profile">
          <tr>
            <td>{{ Auth::user()->name}}&nbsp;</td>
            <td><b style="color: #1167b1"><i class="bi bi-check-square-fill"></i></b></td>
          </tr>
        </a> 
      </li>
      <li class="nav-item">
        <a class="nav-link  active tran" aria-current="page" href="dashboard">Home</a>
      </li>
      <li class="nav-item">
      </li>
      <br><hr class="my-4">
      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="btn btn-outline-dark" style="width:100%">Logout</button>
      </form>
    </ul>
    </div>
  </div>
  @endauth

  @guest
  <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
  <h3 class="offcanvas-title" id="offcanvasExampleLabel">
    <img src="https://i.ibb.co/0YF2dBK/CT2.png" width="140" height="50" alt="">
  </h3>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>

  <div class="offcanvas-body">
    <div>
    <ul class="nav flex-column">
          <a type="button" href="{{url('/login')}}" class="btn btn-light border-dark btn-sm" style="font-size:18px;margin-right:20px;"  data-toggle="tooltip" data-placement="bottom" title="Register Here">Login</a><br>
          <a type="button" href="{{url('/register')}}" class="btn btn-dark btn-sm" style="font-size:18px;margin-right:20px;"  data-toggle="tooltip" data-placement="bottom" title="Register Here">Register</a>
    </div>
  </div>
@endguest

<style>
  .tran{
    text-decoration: none;
    color: black;
    width: 100%;
  }
.tran:hover {
  background-color: rgba(0,0,0,0.2);
  border-radius: 5px;
  color: black;
}
</style>
</div>