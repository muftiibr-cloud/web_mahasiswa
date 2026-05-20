@extends('layouts.main')
@section('title', 'Home')
@section('navHome', 'active')

@section('content')
<div class="jumbotron text-center mt-5">
    <h1 class="display-4">Selamat Datang di Sistem Informasi Akademik</h1>
    <p class="lead">Sistem Informasi Jurusan Teknologi Informasi</p>
    <hr class="my-4">
    <a class="btn btn-primary btn-lg me-2" href="/mahasiswa">Data Mahasiswa</a>
    <a class="btn btn-secondary btn-lg" href="/dosen">Data Dosen</a>
    <a class="btn btn-secondary btn-lg" href="/prodi">Data Prodi</a>
    
</div>
@endsection