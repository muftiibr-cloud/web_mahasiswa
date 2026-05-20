@extends('layouts.main')
@section('title', 'Daftar Mahasiswa')
@section('navMhs', 'active')

@section('content')
<h1>Daftar Mahasiswa Jurusan TI</h1>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Prodi</th>
        <th>Alamat</th>
    </tr>
    @foreach ($mahasiswas as $mahasiswa)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $mahasiswa->nim }}</td>
        <td>{{ $mahasiswa->nama_lengkap }}</td>
        <td>{{ $mahasiswa->email }}</td>
        <td>{{ $mahasiswa->prodi }}</td>
        <td>{{ $mahasiswa->alamat }}</td>
    </tr>
    @endforeach
</table>

{{-- Paginate links --}}
@if(method_exists($mahasiswas, 'links'))
    <div class="d-flex justify-content-center">
        {{ $mahasiswas->links() }}
    </div>
@endif

@endsection