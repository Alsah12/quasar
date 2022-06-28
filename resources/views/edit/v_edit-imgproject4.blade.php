@extends('tampilan.v_tampilan')
@section('title','Project Image')
@section('content')
<section>
    <div class="container mt-5">
        <form action="/imgproject/update4/{{ $beranda->id_imgproject4 }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="{{ url('img/'.$beranda->img_project4) }}" class="img-fluid mb-3">
                    <input type="file" name="img_project4" value="{{ $beranda->img_project4 }}">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="col-lg-12">
                    <label for="">Judul Product</label>
                    <input type="text" class="form-control" name="img_judul4" id="" value="{{ $beranda->img_judul4 }}">
                    </div>
                    <div class="col-lg-12">
                    <label for="">Isi Product</label>
                    <input type="text" class="form-control" name="img_isi4" id="" value="{{ $beranda->img_isi4 }}">
                    </div>
                    <button class="btn btn-outline-dark px-5 mt-2">EDIT</button>
                  </div>
                </div>
        </form>
    </div>
</section>
@endsection
