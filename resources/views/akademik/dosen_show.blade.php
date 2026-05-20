@extends('layouts.main')
@section('title', 'Detail Dosen')
@section('navDosen', 'active')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0"><i class="bi bi-person-badge me-2 text-info"></i>Detail Dosen</h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr><th width="150">NIK</th><td>: {{ $dosen->nik }}</td></tr>
                    <tr><th>Nama</th><td>: {{ $dosen->nama }}</td></tr>
                    <tr><th>Email</th><td>: {{ $dosen->email }}</td></tr>
                    <tr><th>No. Telepon</th><td>: {{ $dosen->no_telp }}</td></tr>
                    <tr><th>Prodi</th><td>: {{ $dosen->prodi }}</td></tr>
                    <tr><th>Alamat</th><td>: {{ $dosen->alamat }}</td></tr>
                </table>
                <div class="d-flex gap-2">
                    <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning">
                        <i class="bi bi-pencil me-1"></i>Edit
                    </a>
                    <a href="{{ route('dosen.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left me-1"></i>Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection