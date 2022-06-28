@extends('tampilan.v_tampilan')
@section('title','About')
@section('content')
<section class="m-0">
    <div class="container py-2 mt-5">
        <div class="col-lg-12">
            <h4 class="text-center" style="position: relative; top:50px;">ABOUT US</h4>
                <img src="{{ url('img/portfolio-2.jpg') }}" class="img-fluid" alt="" srcset="">
            </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="col-lg-2">
                <h5 class="mt-1">OUR SERVICE</h5>
            </div>
            <div class="col-lg-10">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi voluptatem delectus laborum deleniti. Autem, provident quae nulla distinctio asperiores omnis tempore ducimus accusamus odio quia odit nisi tempora. Voluptate, unde!</p>
                <a href="/service"><button class="btn btn-outline-dark px-5">READ</button></a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="col-lg-2">
                <h5 class="mt-1">OUR PRODUCT</h5>
            </div>
            <div class="col-lg-10">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nobis natus ducimus libero corrupti ea. Quo in nihil libero quas! Minima, omnis! Assumenda quas numquam dicta reprehenderit eaque et natus.</p>
                <a href="/product"><button class="btn btn-outline-dark px-5">READ</button></a>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
