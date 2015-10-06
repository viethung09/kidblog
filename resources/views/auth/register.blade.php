@extends('master')

@section('content')

<div class="container">

  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>

    <div class="col-md-4">
      <section class="login-form">
        <form method="POST" action="/auth/register" role="login">
          {!! csrf_field() !!}
          <img src="http://i.imgur.com/RcmcLv4.png" class="img-responsive" alt="" />
          <input type="username" name="username" placeholder="Username" required class="form-control input-lg" value="{{ old('username') }}" />

          <input type="email" name="email" placeholder="Email" required class="form-control input-lg" value="{{ old('email') }}" />

          <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          <input type="password" class="form-control input-lg" id="password" name="password_confirmation" placeholder="Password" required="" />


          <div class="pwstrength_viewport_progress"></div>


          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Register</button>

        </form>

        <div class="form-links">
          <a href="#">www.frontend-website.com</a>
        </div>
      </section>
      </div>
  </div>

</div>

@endsection
