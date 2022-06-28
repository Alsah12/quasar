@extends('tampilan.v_tampilan')
@section('title','Project Image')
@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{ url('img/'.$beranda->img_project) }}" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <h3>{{ $beranda->img_judul }}</h3>
              <p>{{ $beranda->img_isi }}</p>
              </div>
            </div>
    </div>
</section>
@endsection
