@extends('tampilan.v_tampilan')
@section('title','Project Image 6')
@section('content')
<section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{ url('img/'.$beranda->img_project6) }}" class="img-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <h3>{{ $beranda->img_judul6 }}</h3>
              <p>{{ $beranda->img_isi6 }}</p>
              </div>
            </div>
    </div>
</section>
@endsection
