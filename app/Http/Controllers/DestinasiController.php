<?php

namespace App\Http\Controllers;
use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller {
    public function index() {
        $destinasi = \App\Models\Destinasi::all(); // Pastikan Model Destinasi sudah benar
        return view('admin.destinasi', compact('destinasi')); 
}

    public function store(Request $request)
{
    Destinasi::create([
        'nama_destinasi' => $request->nama_destinasi,
        'lokasi' => $request->lokasi,
        'status' => $request->status,
    ]);

// BENAR:
    return redirect('/destinasi')->with('success', 'Data destinasi berhasil diperbarui!');
}
    // SALAH (akan membuat layar blank):
    // redirect('/destinasi')->with('success', 'Data destinasi berhasil diperbarui!');}
    public function update(Request $request, $id)
    {
        // --- TAMBAHKAN BARIS INI UNTUK MELACAK DATA ---
        //dd($request->all()); 
        // ----------------------------------------------

        // 1. Validasi data yang diubah
        $request->validate([
            'nama_destinasi' => 'required|string|max:255',
            'lokasi'         => 'required|string|max:255',
            'status'         => 'required|string',
        ]);
       }
        
        // ... (kode ke bawahnya biarkan saja seperti semula)

    public function destroy($id) {
        Destinasi::destroy($id);
        return redirect()->back()->with('sukses', 'Data berhasil dihapus');
    }

    public function edit($id)
    {
        // 1. Cari data destinasi di database berdasarkan ID yang dipilih
        $destinasi = \App\Models\Destinasi::findOrFail($id);

        // 2. Tampilkan file form edit dan bawa datanya
        // (Sesuaikan nama 'admin.edit' dengan lokasi file blade Anda)
        return view('admin.edit', compact('destinasi')); 
    }
}