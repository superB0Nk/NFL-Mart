@extends('layouts.main')
@section('title')

Home



@endsection
@section('content')
    <section class="hero">
        <main class="content">
            <h1>Mencari Kebutuhan Anda Disini Harga Terjangkau</h1>
            <p>COOMING SOON lore</p>
            <a href="/Product" class="btn">Pesan Sekarang</a>
    </main>
</section>
<section class="about" container>
    <h2 class="text-center mt-5 fw-bold">About Us</h2>
    <div class="row mt-3">
        <div class="col-md-6">
        <img src="{{asset('images/gym2.jpg')}}"alt=""width="100%">

        </div>
        <div class="col-md-6">
            <p class="justype">lorem25</p>
        </div>
        </div>

</section>
<section class="best-product py-4 mt-5 bg-warning-subtle">
    <div class="container">
    <h2 class="text-center mb-4 fw-bold">Best Product</h2>
    <div class="row">
        <div class="cold-md-6">
        <div class="card">
  <img src="{{asset('images/gym2.jpg')}}

  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
      </div>
    </div>


    </section>    
@endsection
