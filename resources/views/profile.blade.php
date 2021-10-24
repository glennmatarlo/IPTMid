@include('head')
<body style="background-color: @include('color');scroll-behavior: smooth;">
@include('nvb')
@include('message')
<div class="container"><br>
    <div class="row mt-3">
        <div class="card">
            <div class="mt-2">
                <h4>Create post</h4>
            </div>
            <form action="{{url('/post')}}" method="post">
                @csrf
            <div class="card-body">
                <textarea class="form-control" name="post" style="width:100%" id="exampleFormControlTextarea1" rows="3"></textarea>
                <div class="mb-3">
                    <label for="category_id">Category</label>
                    <select name="category_id" id="category_id" class="form-select">
                    @foreach(App\Models\Category::get() as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                    </select>
                </div>
                <button class="btn btn-dark" style="width: 100%;">My Posts</button>
            </div>
            </form>
        </div>
<div class="col-md-10 overflow-auto example mt-3" style="width: 80%;height: 600px;">
      <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"><h4>Posts</h4></label>
                @foreach(App\Models\Post::get() as $p)
                @if($p->user_id==Auth::user()->id)
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
                            <div title="male" class="card alert-danger">
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
                    @endif
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    </div>

      <div class="col-md-2 mt-3" style="position:relative;">
        <div class="card" style="width: 13rem;">
            <div class="card-header"><i class="bi bi-list-ul"></i> <b>Categories</b>
            </div>
            <ul class="list-group list-group-flush">
                @foreach(App\Models\Category::get() as $category)
                <a class="list-group-item" href="/categories/{{$category->id}}">{{$category->category}}</a>
                @endforeach
            </ul>
        </div>
        <div class="card mt-2" style="width: 13rem;">
            <div class="card-body">
                <form action="{{url('/profile/upload')}}" method="post">
                @csrf
                    <div class="mb-3">
                        <label for="pp" class="form-label">Profile Photo</label>
                        <input class="form-control" name="pp" type="file" id="formFile">
                    </div>
                    <button class="btn btn-dark">Upload</button>
                </form>
            </div>
        </div>
      </div>
      
</div>
</div>
<br>
<style>
    .cd {
        border-radius:50px;
    }
    .ppd{
        width:40px;
        border-radius:50px;
    }
    .example::-webkit-scrollbar {
  display: none;
}

.trans:hover {
  opacity: 0.8;
}
</style>
</body>
@include('foot')
