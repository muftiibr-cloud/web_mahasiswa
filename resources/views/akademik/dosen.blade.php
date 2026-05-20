@extends('layouts.main')
@section('title', 'Data Dosen')
@section('navDosen', 'active')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center bg-white py-3">
        <h5 class="mb-0"><i class="bi bi-person-badge me-2 text-primary"></i>Data Dosen</h5>
        <a href="{{ route('dosen.create') }}" class="btn btn-primary btn-sm">
            <i class="bi bi-plus-lg me-1"></i>Tambah Dosen
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telp</th>
                        <th>Prodi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dosens as $dosen)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $dosen->nik }}</td>
                        <td>{{ $dosen->nama }}</td>
                        <td>{{ $dosen->email }}</td>
                        <td>{{ $dosen->no_telp }}</td>
                        <td><span class="badge bg-info text-dark">{{ $dosen->prodi }}</span></td>
                        <td>
                            <a href="{{ route('dosen.show', $dosen->id) }}" class="btn btn-sm btn-outline-info">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-sm btn-outline-warning">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted py-4">Belum ada data dosen</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $dosens->links() }}
        </div>
    </div>
</div>
@endsection