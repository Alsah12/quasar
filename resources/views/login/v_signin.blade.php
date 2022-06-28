@extends('login.v_login-tampilan')
@section('title','SIGN IN')
@section('auth')
<!-- Section: Design Block -->
<section class="">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
          background-image: url('img/hero-bg.jpg');
          height: 300px;
          "></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
          margin-top: -100px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
          ">
      <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5 text-center">SIGN IN</h2>
            <form method="POST" action="{{ route('login') }}">
            @csrf

              <!-- Email input -->
              <div class="form-outline mb-4">

                <label class="form-label" for="">Email address</label>
                <input type="email" id="" name="email" class="form-control @error('email') is-invalid @enderror" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">

                <label class="form-label" for="">Password</label>
                <input type="password" id="" name="password" class="form-control @error('password') is-invalid @enderror" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <!-- Checkbox -->
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8">
                        <div class="">
                            <a href="{{ route('register') }}">Registrasi User</a>
                          </div>
                    </div>
                </div>



              <!-- Submit button -->
                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-block mb-4 px-5">
                    Sign in
                </button>
                </div>

              <!-- Register buttons -->
              <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
@endsection
