@extends('layouts.main')
@section('title', 'Detail Mahasiswa')
@section('navMhs', 'active')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0"><i class="bi bi-person me-2 text-info"></i>Detail Mahasiswa</h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless">
                    <tr><th width="150">NIM</th><td>: {{ $mahasiswa->nim }}</td></tr>
                    <tr><th>Nama</th><td>: {{ $mahasiswa->nama_lengkap }}</td></tr>
                    <tr><th>Tempat Lahir</th><td>: {{ $mahasiswa->tempat_lahir }}</td></tr>
                    <tr><th>Tanggal Lahir</th><td>: {{ $mahasiswa->tgl_lahir }}</td></tr>
                    <tr><th>Email</th><td>: {{ $mahasiswa->email }}</td></tr>
                    <tr><th>Prodi</th><td>: {{ $mahasiswa->prodi }}</td></tr>
                    <tr><th>IPK</th><td>: {{ $mahasiswa->ipk }}</td></tr>
                    <tr><th>Alamat</th><td>: {{ $mahasiswa->alamat }}</td></tr>
                </table>
                <div class="d-flex gap-2">
                    <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning">
                        <i class="bi bi-pencil me-1"></i>Edit
                    </a>
                    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left me-1"></i>Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection