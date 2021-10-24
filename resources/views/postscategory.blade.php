@extends('bs')
@section('content')
<div class="container">

<nav class="navbar navbar-expand-lg bg-dark text-uppercase" id="mainNav" style="border-radius:3px;">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item mx-0 mx-lg-1"><a class="text-white nav-link py-3 px-0 px-lg-3 rounded" href="/authors"><i class="bi bi-person"></i> AUTHORS</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row mt-3">
      <div class="col-md-10 overflow-auto example" style="width: 80%;height: 600px;">
      <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"><h4>Posts</h4></label>
                @foreach($posts as $p)
                  @if ($p->user->gender == 'Male')
                    <div class="mb-3">
                        <div title="male" class="card alert-primary">
                            <div class="card-header">
                            <div class="dropdown float-end">
                              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi bi-person"></i> {{$p->category->category}}
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                @foreach(App\Models\User::whereHas('posts', function($query) use ($p){
                                    $query->where('category_id', $p->category_id);
                                })->get() as $user)
                                <li><a class="dropdown-item" href="/authors/{{$user->id}}">{{$user->name}}</a></li>
                                @endforeach

                              </ul>
                            </div>
                            {{$p->user->name}}
                            </div>
                            <div class="card-body">
                            {{$p->post}}
                            </div>
                        </div>
                    </div>
                    @else
                      <div class="mb-3">
                        <div title="female" class="card alert-danger">
                            <div class="card-header">
                            <div class="dropdown float-end">
                              <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi bi-person"></i>{{$p->category->category}}
                              </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                @foreach(App\Models\User::whereHas('posts', function($query) use ($p){
                                    $query->where('category_id', $p->category_id);
                                })->get() as $user)
                                <li><a class="dropdown-item" href="/authors/{{$user->id}}">{{$user->name}}</a></li>
                                @endforeach

                              </ul>
                            </div>
                            {{$p->user->name}}
                            </div>
                            <div class="card-body">
                            {{$p->post}}
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    </div>
      <div class="col-md-2" style="position:relative;">
        <div class="card" style="width: 13rem;">
            <div class="card-header"><i class="bi bi-list-ul"></i> <b>Categories</b>
            </div>
            
            <ul class="list-group list-group-flush">
                @foreach(App\Models\Category::get() as $category)
                <a class="list-group-item" href="/categories/{{$category->id}}">{{$category->category}}</a>
                @endforeach
            </ul>
            
        </div>
      </div>
      
</div>
</div>

<br>
</body>
<style>
    .example::-webkit-scrollbar {
  display: none;
}

.trans:hover {
  opacity: 0.8;
}
</style>

@endsection