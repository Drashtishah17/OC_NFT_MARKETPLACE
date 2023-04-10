@extends('layouts.guest')
@section('class', 'login-page')
@section('title', 'Admin | Login')

@section('content')
<div class="login-box" style="background-color:darkorchid">
  <div class="login-logo">
    <a href="#" style="color: white"><b>Admin Panel</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card" style="background-color: violet">
    <div class="card-body login-card-body" style="background-color: rgb(248, 180, 228)">
      @if(session('error'))
      <div class="text-danger text-center">{{session('error')}}</div>
      @endif
      @if(session('success'))
      <div class="text-success text-center">{{session('success')}}</div>
      @endif
      <p class="login-box-msg" style="color: white">Sign in to start your session</p>

      <form action="{{ route('authenticate') }}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" id="email" name="email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" required>
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" style="background-color: slateblue">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
@endsection