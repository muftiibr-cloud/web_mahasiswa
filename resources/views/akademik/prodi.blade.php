@extends('layouts.main')
@section('title','Prodi')
@section('content')

<div class="container my-5">
    <h1>Daftar Jurusan Teknologi Informasi</h1>
    <div class="row my-5">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/ti.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Prodi Manajemen Informatika</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div> 
        
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/ti.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Program Studi Teknik Komputer</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('images/ti.jpeg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Prodi Teknologi Rekayasa Perangkat Lunak</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection