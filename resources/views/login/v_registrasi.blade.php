@extends('login.v_login-tampilan')
@section('title','SIGN UP')
@section('auth')
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
            <h2 class="fw-bold mb-5 text-center">SIGN UP</h2>
            <form method="POST" action="{{ route('register') }}">

            @csrf
              <div class="form-outline mb-4">
                <label class="form-label" for="">Name</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>

              <!-- Email input -->
              <div class="form-outline mb-4">

                <label class="form-label" for="">Email address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">

                <label class="form-label" for="">Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>

              <!-- Checkbox -->
              <div class="form-outline mb-4">

                <label class="form-label" for="">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control " name="password_confirmation" required autocomplete="new-password">
                </div>

              <!-- Submit button -->
                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary btn-block mb-4 px-5">
                    sign up
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
@endsection
