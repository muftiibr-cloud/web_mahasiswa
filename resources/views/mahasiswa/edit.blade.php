@extends('layouts.main')
@section('title', 'Edit Mahasiswa')
@section('navMhs', 'active')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0"><i class="bi bi-pencil-square me-2 text-warning"></i>Edit Data Mahasiswa</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                    @csrf @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">NIM</label>
                            <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror"
                                   value="{{ old('nim', $mahasiswa->nim) }}">
                            @error('nim')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror"
                                   value="{{ old('nama_lengkap', $mahasiswa->nama_lengkap) }}">
                            @error('nama_lengkap')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control"
                                   value="{{ old('tempat_lahir', $mahasiswa->tempat_lahir) }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" class="form-control"
                                   value="{{ old('tgl_lahir', $mahasiswa->tgl_lahir) }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                   value="{{ old('email', $mahasiswa->email) }}">
                            @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">Prodi</label>
                            <select name="prodi" class="form-select @error('prodi') is-invalid @enderror">
                                <option value="">-- Pilih Prodi --</option>
                                <option value="Manajemen Informatika" {{ old('prodi',$mahasiswa->prodi)=='Manajemen Informatika'?'selected':'' }}>Manajemen Informatika</option>
                                <option value="TRPL" {{ old('prodi',$mahasiswa->prodi)=='TRPL'?'selected':'' }}>TRPL</option>
                                <option value="Teknik Komputer" {{ old('prodi',$mahasiswa->prodi)=='Teknik Komputer'?'selected':'' }}>Teknik Komputer</option>
                            </select>
                            @error('prodi')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-semibold">IPK</label>
                            <input type="number" step="0.01" min="0" max="4" name="ipk"
                                   class="form-control" value="{{ old('ipk', $mahasiswa->ipk) }}">
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-semibold">Alamat</label>
                            <textarea name="alamat" class="form-control" rows="3">{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                        </div>
                    </div>
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-warning">
                            <i class="bi bi-save me-1"></i>Update
                        </button>
                        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left me-1"></i>Kembali
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection