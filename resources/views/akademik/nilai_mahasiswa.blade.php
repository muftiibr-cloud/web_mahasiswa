@extends('layouts.main')
@section('title', 'Nilai Mahasiswa')
@section('navMhs', 'active')

@section('content')
<h1>Nilai Mahasiswa</h1>
<table class="table table-bordered">
    <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th colspan="4">Total Nilai</th>
    </tr>
    <tr>
        <td>{{ $nama }}</td>
        <td>{{ $nim }}</td>
        @foreach($total_nilai as $nilai)
            <td>{{ $nilai }}</td>
        @endforeach
    </tr>
</table>
@endsection