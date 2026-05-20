<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Tampilkan semua mahasiswa
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->paginate(5);
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    /**
     * Tampilkan form tambah mahasiswa
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Simpan mahasiswa baru ke database
     */
    public function store(Request $request)
{
    $request->validate([
        'nim'          => 'required|string|unique:mahasiswas,nim',
        'nama_lengkap' => 'required|string|max:100',
        'tempat_lahir' => 'required|string',
        'tgl_lahir'    => 'required|date',
        'email'        => 'required|email|unique:mahasiswas,email',
        'prodi'        => 'required|string',
        'ipk'          => 'nullable|numeric|min:0|max:4',
        'alamat'       => 'nullable|string',
    ]);

    Mahasiswa::create($request->all());

    return redirect()->route('mahasiswa.index')
                     ->with('success', 'Data mahasiswa berhasil ditambahkan!');
}

    /**
     * Tampilkan detail mahasiswa
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Tampilkan form edit mahasiswa
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update data mahasiswa
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
{
    $request->validate([
        'nim'          => 'required|string|unique:mahasiswas,nim,' . $mahasiswa->id,
        'nama_lengkap' => 'required|string|max:100',
        'tempat_lahir' => 'required|string',
        'tgl_lahir'    => 'required|date',
        'email'        => 'required|email|unique:mahasiswas,email,' . $mahasiswa->id,
        'prodi'        => 'required|string',
        'ipk'          => 'nullable|numeric|min:0|max:4',
        'alamat'       => 'nullable|string',
    ]);

    $mahasiswa->update($request->all());

    return redirect()->route('mahasiswa.index')
                     ->with('success', 'Data mahasiswa berhasil diperbarui!');
}

    /**
     * Hapus mahasiswa
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')
                         ->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}