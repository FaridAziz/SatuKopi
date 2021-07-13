@extends('layouts.app')

@section('container')
<div class="container mt-4">
    <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
        <div class="card">
        <img src="assets\img\makanan.png" class="card-img-top" style="height: 450px;">
        <div class="card-body">
            <h5 class="card-title">Makanan</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
        <img src="assets\img\minuman.png" class="card-img-top" style="height: 450px;">
        <div class="card-body">
            <h5 class="card-title">Minuman</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection