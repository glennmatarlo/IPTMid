@if (session('errors'))
<div class="position-fixed top-3 end-0 p-3" style="z-index: 11">
  <div id="liveToast" class="alert border-danger alert-danger" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,.4);" role="alert toast" aria-live="assertive" aria-atomic="true">
    <div class="alert-danger">
      <strong class="me-auto">Please fix the following errors &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
      <small>Now</small>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <hr>
    <div class="toast-body">
    <ul>
        @foreach(session('errors')->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
    </div>
  </div>
</div>
@endif
@if (session('Error'))
<div class="position-fixed top-3 end-0 p-3" style="z-index: 11;">
  <div class="alert align-items-center text-white bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex" style="height:20px">
        <span>{{session('Error') }} &nbsp;&nbsp;&nbsp;</span>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
</div>
@endif
@if (session('Message'))
<div class="position-fixed top-3 end-0 p-3" style="z-index: 11">
  <div class="alert align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex" style="height:20px">
        <span>{{session('Message') }} &nbsp;&nbsp;&nbsp;</span>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  </div>
</div>
@endif