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
        $mahasiswas = Mahasiswa::latest()->paginate(10);
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
            'nama'          => 'required|string|max:100',
            'nim'           => 'required|string|unique:mahasiswas,nim',
            'prodi'         => 'required|string|max:100',
            'email'         => 'required|email|unique:mahasiswas,email',
            'no_hp'         => 'nullable|string|max:15',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'angkatan'      => 'required|digits:4|integer|min:2000|max:' . date('Y'),
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
            'nama'          => 'required|string|max:100',
            'nim'           => 'required|string|unique:mahasiswas,nim,' . $mahasiswa->id,
            'prodi'         => 'required|string|max:100',
            'email'         => 'required|email|unique:mahasiswas,email,' . $mahasiswa->id,
            'no_hp'         => 'nullable|string|max:15',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'angkatan'      => 'required|digits:4|integer|min:2000|max:' . date('Y'),
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