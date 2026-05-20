@extends('layouts.main')
@section('title', 'Edit Dosen')
@section('navDosen', 'active')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0"><i class="bi bi-pencil-square me-2 text-warning"></i>Edit Data Dosen</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label class="form-label fw-semibold">NIK</label>
                        <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror"
                               value="{{ old('nik', $dosen->nik) }}">
                        @error('nik')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nama</label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                               value="{{ old('nama', $dosen->nama) }}">
                        @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email', $dosen->email) }}">
                        @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">No. Telepon</label>
                        <input type="text" name="no_telp" class="form-control"
                               value="{{ old('no_telp', $dosen->no_telp) }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Prodi</label>
                        <select name="prodi" class="form-select @error('prodi') is-invalid @enderror">
                            <option value="">-- Pilih Prodi --</option>
                            <option value="Manajemen Informatika" {{ old('prodi',$dosen->prodi)=='Manajemen Informatika'?'selected':'' }}>Manajemen Informatika</option>
                            <option value="TRPL" {{ old('prodi',$dosen->prodi)=='TRPL'?'selected':'' }}>TRPL</option>
                            <option value="Teknik Komputer" {{ old('prodi',$dosen->prodi)=='Teknik Komputer'?'selected':'' }}>Teknik Komputer</option>
                        </select>
                        @error('prodi')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3">{{ old('alamat', $dosen->alamat) }}</textarea>
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-warning">
                            <i class="bi bi-save me-1"></i>Update
                        </button>
                        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left me-1"></i>Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection