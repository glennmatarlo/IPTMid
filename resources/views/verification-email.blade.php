<div class="container">
    <h2>CHEAP TALK</h2>
    <p>
        <h3>Welcome {{$user->name}}!</h3>
    </p>
    <h3>
        <a href="{{url('/verification/' . $user->id . "/" . $user->remember_token)}}">Click here</a> &nbsp;to verify your account.
    </h3>
</div>