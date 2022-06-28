@extends('tampilan.v_tampilan')
@section('title','Service')
@section('content')
<section>
    <div class="container mt-5">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="{{ asset('img/portfolio-7.jpg') }}" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <h3>OUR</h3>
              <h3>SERVICE</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cumque dolor reiciendis deserunt eius. Repellendus molestiae quod ut explicabo reiciendis doloribus commodi facere mollitia adipisci, inventore alias quasi soluta ab.</p>
              </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="section-title">
                <h3 class="text-center">CHECK OUR <span>SERVICES</span></h3>
                <p class="text-center">Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
              </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card shadow py-5">
                        <div class="d-flex justify-content-center mt-3">
                            <i class="fa-solid fa-circle-info fa-2x"></i>
                        </div>
                        <p class="text-center mt-5">COSTUMER SERVICE</p>
                        <div class="d-flex justify-content-center">
                        <a href=""><button class="btn btn-outline-dark text-dark px-4" style="position:relative; font-weight:500; top:20px; background-color:#dddd;">tidak berfungsi</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card shadow py-5">
                        <div class="d-flex justify-content-center mt-3">
                            <i class="fa-solid fa-handshake-angle fa-2x"></i>
                        </div>
                        <p class="text-center mt-5">JOIN MEMBERSHIP</p>
                        <div class="d-flex justify-content-center">
                        <a href=""><button class="btn btn-outline-dark text-dark px-4" style="position:relative; font-weight:500; top:20px; background-color:#dddd;">tidak berfungsi</button></a>
                        </div>
                    </div>
              </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card shadow py-5">
                        <div class="d-flex justify-content-center mt-3">
                            <i class="fa-solid fa-circle-question fa-2x"></i>
                        </div>
                        <p class="text-center mt-5">GOT PROBLEM?</p>
                        <div class="d-flex justify-content-center">
                        <a href=""><button class="btn btn-outline-dark text-dark px-4" style="position:relative; font-weight:500; top:20px; background-color:#dddd;">tidak berfungsi</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
