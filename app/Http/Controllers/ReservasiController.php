<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class ReservasiController extends Controller
{
    // Menampilkan form pemesanan
    public function create()
    {
        return view('reservasi');
    }

    // Menyimpan data pelanggan ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:40',
            'tanggal' => 'required|date|after_or_equal:today',
            'jam' => 'required|date_format:H:i',
            'jumlahOrang' => 'required|string|min:1|max:50', 
        ]);
        
        $reservasi = Reservasi::create([
            'nama' => $request->input('nama'),
            'tanggal' => $request->input('tanggal'),
            'jam' => $request->input('jam'),
            'jumlahOrang' => $request->input('jumlahOrang'),
        ]);

        // Redirect kembali ke halaman pemesanan dengan pesan sukses
        return redirect()->route('reservasi.create')->with('success', 'Reservasi berhasil diterima');
    }
}

