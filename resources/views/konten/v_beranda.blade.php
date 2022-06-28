@extends('tampilan.v_tampilan')
@section('title','Beranda')
@section('content')
@foreach ($beranda as $data)
<section class="m-0" style="background-image: url('img/Hero-bg.jpg'); background-position:relative; background-size:cover; height:80vh;">
    <div class="container py-2">
        <div class="row">
            <div class="col-lg-6" style="position:relative; top:80px;">
                <h1>QUASI STELLAR</h1>
                <h1>RADIO SOURCE.</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid cumque dolor reiciendis deserunt eius. Repellendus molestiae quod ut explicabo reiciendis doloribus commodi facere mollitia adipisci, inventore alias quasi soluta ab.</p>
            </div>
        </div>
    </div>
  </section>

    <section class="m-0">
        <div class="container py-2 mt-5">
            <div class="col-lg-12">
                <h4 class="text-center" style="position: relative; top:50px;">ABOUT US</h4>
                <img src="{{ url('img/'.$data->about_img) }}" class="img-fluid" alt="" srcset="">
            </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="col-lg-2">
                    <h5 class="mt-3">{{ $data->about_judul }}</h5>
                </div>
                <div class="col-lg-10">
                <p>{{ $data->about_isi }}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-lg-2">
                    <h5 class="mt-3">{{ $data->about_judul2 }}</h5>
                </div>
                <div class="col-lg-10">
                <p>{{ $data->about_isi2 }}</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{ url('img/'.$data->service_img) }}" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <h1>{{ $data->service_judul }}</h1>
                  <h1>{{ $data->service_judul2 }}</h1>
                  <p>{{ $data->service_isi }}</p>
                  <a href="/service"><button class="btn btn-outline-dark px-5 mb-2">Coba di klik</button></a>
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
                        <div class="card shadow py-5 mb-5">
                            <div class="d-flex justify-content-center mt-3">
                                <i class="fa-solid fa-circle-info fa-2x"></i>
                            </div>
                            <p class="text-center mt-5">COSTUMER SERVICE</p>
                            <div class="d-flex justify-content-center">
                            <a href=""><button class="btn btn-outline-dark text-dark px-4" style="position:relative; font-weight:500; top:65px; background-color:#dddd;">tidak berfungsi</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card shadow py-5 mb-5">
                            <div class="d-flex justify-content-center mt-3">
                                <i class="fa-solid fa-handshake-angle fa-2x"></i>
                            </div>
                            <p class="text-center mt-5">JOIN MEMBERSHIP</p>
                            <div class="d-flex justify-content-center">
                            <a href=""><button class="btn btn-outline-dark text-dark px-4" style="position:relative; font-weight:500; top:65px; background-color:#dddd;">tidak berfungsi</button></a>
                            </div>
                        </div>
                  </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="card shadow py-5 mb-5">
                            <div class="d-flex justify-content-center mt-3">
                                <i class="fa-solid fa-circle-question fa-2x"></i>
                            </div>
                            <p class="text-center mt-5">GOT PROBLEM?</p>
                            <div class="d-flex justify-content-center">
                            <a href=""><button class="btn btn-outline-dark text-dark px-4" style="position:relative; font-weight:500; top:65px; background-color:#dddd;">tidak berfungsi</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                  <h1>{{ $data->project_judul }}</h1>
                  <h1>{{ $data->project_judul2 }}</h1>
                  <p>{{ $data->project_isi }}</p>
                  <a href="/product"><button class="btn btn-outline-dark px-5 mb-2">Coba di klik</button></a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ url('img/'.$data->project_img) }}" class="img-fluid"></div>
                </div>
        </div>
    </section>
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="card shadow">
                        <img src="{{ url('img/'.$data->img_project) }}" class="img-thumbnail" alt="" srcset="">
                        <div class="d-flex justify-content-center">
                        <a href="/imgproject/detail/{{$data->id_imgproject}}"><button class="btn btn-outline-dark  text-dark" style="font-weight:500; width:50px; height:50px; border-radius:50px; position:relative; background-color:#dddd; bottom:30px;">?</button></a>
                        <a href="/imgproject/edit/{{$data->id_imgproject}}"><button class="btn btn-outline-dark  text-dark" style="font-weight:500; width:50px; height:50px; border-radius:50px; position:relative; background-color:#dddd; bottom:30px;">!</button></a>
                    </div>
                        <div class="card-body">
                        <h5 class="text-center">{{ $data->img_judul}}</h5>
                        <div class="d-flex justify-content-center">
                    </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="card shadow">
                        <img src="{{ url('img/'.$data->img_project2) }}" class="img-thumbnail" alt="" srcset="">
                        <div class="d-flex justify-content-center">
                            <a href="/imgproject/detail2/{{$data->id_imgproject2}}"><button class="btn btn-outline-dark text-dark" style="font-weight:500; width:50px; height:50px; border-radius:50px; position:relative; background-color:#dddd; bottom:30px;">?</button></a>
                            <a href="/imgproject/edit2/{{$data->id_imgproject2}}"><button class="btn btn-outline-dark  text-dark" style="font-weight:500; width:50px; height:50px; border-radius:50px; position:relative; background-color:#dddd; bottom:30px;">!</button></a>
                        </div>
                        <div class="card-body">
                        <h5 class="text-center">{{ $data->img_judul2}}</h5>
                        <div class="d-flex justify-content-center">
                    </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="card shadow">
                        <img src="{{ url('img/'.$data->img_project3) }}" class="img-thumbnail" alt="" srcset="">
                        <div class="d-flex justify-content-center">
                            <a href="/imgproject/detail3/{{$data->id_imgproject3}}"><button class="btn btn-outline-dark  text-dark" style="font-weight:500; width:50px; height:50px; border-radius:50px; position:relative; background-color:#dddd; bottom:30px;">?</button></a>
                            <a href="/imgproject/edit3/{{$data->id_imgproject3}}"><button class="btn btn-outline-dark  text-dark" style="font-weight:500; width:50px; height:50px; border-radius:50px; position:relative; background-color:#dddd; bottom:30px;">!</button></a>
                        </div>
                        <div class="card-body">
                        <h5 class="text-center">{{ $data->img_judul3}}</h5>
                        <div class="d-flex justify-content-center">
                    </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="card shadow">
                        <img src="{{ url('img/'.$data->img_project4) }}" class="img-thumbnail" alt="" srcset="">
                        <div class="d-flex justify-content-center">
                            <a href="/imgproject/detail4/{{$data->id_imgproject4}}"><button class="btn btn-outline-dark  text-dark" style="font-weight:500; width:50px; height:50px; border-radius:50px; position:relative; background-color:#dddd; bottom:30px;">?</button></a>
                            <a href="/imgproject/edit4/{{$data->id_imgproject4}}"><button class="btn btn-outline-dark  text-dark" style="font-weight:500; width:50px; height:50px; border-radius:50px; position:relative; background-color:#dddd; bottom:30px;">!</button></a>
                        </div>
                        <div class="card-body">
                        <h5 class="text-center">{{ $data->img_judul4}}</h5>
                        <div class="d-flex justify-content-center">
                    </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="card shadow">
                        <img src="{{ url('img/'.$data->img_project5) }}" class="img-thumbnail" alt="" srcset="">
                        <div class="d-flex justify-content-center">
                            <a href="/imgproject/detail5/{{$data->id_imgproject5}}"><button class="btn btn-outline-dark  text-dark" style="font-weight:500; width:50px; height:50px; border-radius:50px; position:relative; background-color:#dddd; bottom:30px;">?</button></a>
                            <a href="/imgproject/edit5/{{$data->id_imgproject5}}"><button class="btn btn-outline-dark  text-dark" style="font-weight:500; width:50px; height:50px; border-radius:50px; position:relative; background-color:#dddd; bottom:30px;">!</button></a>
                        </div>
                        <div class="card-body">
                        <h5 class="text-center">{{ $data->img_judul5}}</h5>
                        <div class="d-flex justify-content-center">
                    </div>
                    </div>
                </div>
            </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                    <div class="card shadow">
                        <img src="{{ url('img/'.$data->img_project6) }}" class="img-thumbnail" alt="" srcset="">
                        <div class="d-flex justify-content-center">
                            <a href="/imgproject/detail6/{{$data->id_imgproject6}}"><button class="btn btn-outline-dark  text-dark" style="font-weight:500; width:50px; height:50px; border-radius:50px; position:relative; background-color:#dddd; bottom:30px;">?</button></a>
                            <a href="/imgproject/edit6/{{$data->id_imgproject6}}"><button class="btn btn-outline-dark  text-dark" style="font-weight:500; width:50px; height:50px; border-radius:50px; position:relative; background-color:#dddd; bottom:30px;">!</button></a>
                        </div>
                        <div class="card-body">
                        <h5 class="text-center">{{ $data->img_judul6}}</h5>
                        <div class="d-flex justify-content-center">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-image: url('img/portfolio-2.jpg'); background-position:relative; background-size:cover; height:75vh;">
        <div class="container mt-5">
            <div class="d-flex justify-content-center">
                    <div class="col-lg-8 col-md-10 col-sm-10 mt-5">
                    <h4 class="text-center">CONTACT US</h4>
                    <p class="text-center">KONTAK KAMI JIKA MEMILIKI KENDALA</p>
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
                            <div class="text-center"><button class="text-dark mt-5 btn btn-outline-dark px-5" style="font-weight:500; position:relative; background-color:#dddd; bottom:20px;">Tidak berfungsi</button>
                            </div>
                          </form>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container mt-5">
            <div class="row">

                <h4 class="text-center">ARTICLE</h4>
                <p class="text-center">KUMPULAN ARTIKEL TENTANG KAMI</p>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card mb-5">
                        <img src="{{ url('img/'.$data->artikel_img) }}" class="img-thumbnail">
                        <div class="card-body">
                            <h6 class="text-center">{{ $data->artikel_judul }}</h6>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="/artikel/detail/{{ $data->id_artikel }}"><button class="btn btn-outline-dark text-dark px-5" style="position:relative; top:20px; background-color:#dddd; ">Coba di klik</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card mb-5">
                        <img src="{{ url('img/'.$data->artikel_img2) }}" class="img-thumbnail" height="300">
                        <div class="card-body">
                            <h6 class="text-center">{{ $data->artikel_judul2 }}</h6>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="/artikel/detail2/{{ $data->id_artikel2 }}"><button class="btn btn-outline-dark text-dark px-5" style="position:relative; top:20px; background-color:#dddd; ">Coba di klik</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card mb-5">
                        <img src="{{ url('img/'.$data->artikel_img3) }}" class="img-thumbnail" height="300">
                        <div class="card-body">
                            <h6 class="text-center">{{ $data->artikel_judul3 }}</h6>
                        </div>

                        <div class="d-flex justify-content-center">
                            <a href="/artikel/detail3/{{ $data->id_artikel3 }}"><button class="btn btn-outline-dark text-dark px-5" style="position:relative; top:20px; background-color:#dddd; ">Coba di klik</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endforeach
@endsection
