@extends('tampilan.v_tampilan')
@section('title','Contact')
@section('content')
<section style="background-image: url('img/portfolio/portfolio-2.jpg'); background-position:relative; background-size:cover; height:75vh;">
    <div class="container mt-5">
        <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <h4 class="text-center">CONTACT US</h4>
                <p class="text-center">KONTAK KAMI JIKA MEMILIKI SARAN</p>
                    <form action="" method="post">
                        <div class="row">
                          <div class="col form-group mb-2">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                          </div>
                          <div class="col form-group mb-2">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                          </div>
                        </div>
                        <div class="form-group mb-2">
                          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group mb-2">
                          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="text-center"><button class="text-dark mt-5 btn btn-outline-dark px-5" style="font-weight:500; position:relative; background-color:#dddd; bottom:20px;">SEND ME</button></div>
                      </form>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                <h4 class="text-center">SOCIAL MEDIA</h4>
                <p class="text-center">IKUTI SOCIAL MEDIA KAMI MELALUI</p>

                <div class="d-flex justify-content-center">
                <div class="social-links mt-3">
                  <a href="#" class="twitter mx-1"><i class="bx bxl-twitter">test</i></a>
                  <a href="#" class="facebook mx-1"><i class="bx bxl-facebook">test</i></a>
                  <a href="#" class="instagram mx-1"><i class="bx bxl-instagram">test</i></a>
                  <a href="#" class="google-plus mx-1"><i class="bx bxl-skype">test</i></a>
                  <a href="#" class="linkedin mx-1"><i class="bx bxl-linkedin">test</i></a>
        </div>
            </div>
              </div>
        </div>
    </div>
</section>
@endsection
