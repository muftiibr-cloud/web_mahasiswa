<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = Dosen::latest()->paginate(10);
        return view('akademik.dosen', compact('dosens'));
    }

    public function create()
    {
        return view('akademik.dosen_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik'    => 'required|string|unique:dosens,nik',
            'nama'   => 'required|string|max:100',
            'email'  => 'required|email|unique:dosens,email',
            'no_telp'=> 'nullable|string|max:15',
            'prodi'  => 'required|string|max:100',
            'alamat' => 'nullable|string',
        ]);

        Dosen::create($request->all());
        return redirect()->route('dosen.index')
                         ->with('success', 'Data dosen berhasil ditambahkan!');
    }

    public function show(Dosen $dosen)
    {
        return view('akademik.dosen_show', compact('dosen'));
    }

    public function edit(Dosen $dosen)
    {
        return view('akademik.dosen_edit', compact('dosen'));
    }

    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nik'    => 'required|string|unique:dosens,nik,' . $dosen->id,
            'nama'   => 'required|string|max:100',
            'email'  => 'required|email|unique:dosens,email,' . $dosen->id,
            'no_telp'=> 'nullable|string|max:15',
            'prodi'  => 'required|string|max:100',
            'alamat' => 'nullable|string',
        ]);

        $dosen->update($request->all());
        return redirect()->route('dosen.index')
                         ->with('success', 'Data dosen berhasil diperbarui!');
    }

    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect()->route('dosen.index')
                         ->with('success', 'Data dosen berhasil dihapus!');
    }
}