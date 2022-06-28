@extends('tampilan.v_tampilan')
@section('title','Product')
@section('content')
@foreach ($product as $data)
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
              <h1>{{ $data->project_judul }}</h1>
              <h1>{{ $data->project_judul2 }}</h1>
              <p>{{ $data->project_isi }}</p>
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
                    <a href="/imgproject/detail/{{$data->id_imgproject}}"><button class="btn btn-outline-dark px-5 text-dark" style="font-weight:500; position:relative; background-color:#dddd; bottom:20px;">coba di klik untuk detail</button></a>
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
                    <a href="/imgproject/detail2/{{$data->id_imgproject2}}"><button class="btn btn-outline-dark px-5 text-dark" style="font-weight:500; position:relative; background-color:#dddd; bottom:20px;">coba di klik</button></a>
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
                    <a href="/imgproject/detail3/{{$data->id_imgproject3}}"><button class="btn btn-outline-dark px-5 text-dark" style="font-weight:500; position:relative; background-color:#dddd; bottom:20px;">coba di klik</button></a>
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
                    <a href="/imgproject/detail4/{{$data->id_imgproject4}}"><button class="btn btn-outline-dark px-5 text-dark" style="font-weight:500; position:relative; background-color:#dddd; bottom:20px;">coba di klik</button></a>
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
                    <a href="/imgproject/detail5/{{$data->id_imgproject5}}"><button class="btn btn-outline-dark px-5 text-dark" style="font-weight:500; position:relative; background-color:#dddd; bottom:20px;">coba di klik</button></a>
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
                    <a href="/imgproject/detail6/{{$data->id_imgproject6}}"><button class="btn btn-outline-dark px-5 text-dark" style="font-weight:500; position:relative; background-color:#dddd; bottom:20px;">coba di klik</button></a>
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
@endforeach
@endsection
