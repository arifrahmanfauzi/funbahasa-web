@extends('layouts.auth')

@section('content')

<div class="content">
  <div class="container">
    <div class="row">
      <div class="col-md-6 order-md-2">
        <img src="{{ asset('landingpage/img/login.svg') }}" alt="Image" class="img-fluid">
      </div>
      <div class="col-md-6 contents">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="mb-4">
            <h3>Sign Up to <strong>FUNBAHASA</strong></h3>
            <p class="mb-4">Fun Bahasa #BahasaAdalahKita</p>
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
          </div>
          <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group first">
              <label for="username">Name</label>
              <input type="text" value="{{ old('name') }}" name="name" class="form-control" id="username">
            </div>
            <div class="form-group first">
              <label for="Email">Email</label>
              <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="Email">
            </div>
            <div class="form-group last mb-4">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="form-group last mb-4">
              <label for="password_confirmation">Password Confirmation</label>
              <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
            </div>

            <input type="submit" value="Sign Up" class="btn text-white btn-block btn-info">
            <span class="d-block text-left my-4 text-muted"> Already have an account?
              <a href="{{ route('login') }}" class="text-danger">Sign In</a>
            </span>

            <span class="d-block text-left my-3 text-muted"> or sign up with</span>
            
            <div class="social-login">
              <a href="{{ route('login.facebook') }}" class="facebook">
                <span class="icon-facebook mr-3"></span> 
              </a>
              <a href="{{ route('login.google') }}" class="google">
                <span class="icon-google mr-3"></span> 
              </a>
            </div>
          </form>
          </div>
        </div>
        
      </div>
      
    </div>
  </div>
</div>

@endsection
