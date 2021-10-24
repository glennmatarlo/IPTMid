@extends('base')
@section('content')
        <div class="card"><br>
            <div class="cad-body">
                <form action="{{url('/register')}}" method="post">
                {{csrf_field()}}
                    <div class="container">
                        <div class="mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="gender">Gender</label>
                            <select name="gender" value="{{ old('gender');}}" class="form-select form-select mb-3" aria-label=".form-select example">
                                <option selected>Choose</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                            
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <p class="text-center">Already have an account? Log in <a href="{{url('/login')}}">here</a>.</p>
                        <button class="btn btn-dark" style="width: 100%;">Sign up</button>
                    </div>
                <br>
                </form>
            </div>
        </div>
        
@stop