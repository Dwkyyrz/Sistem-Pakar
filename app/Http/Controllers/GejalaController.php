<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gejala;

class GejalaController extends Controller
{
    public function index()
    {
        $gejalas = Gejala::all();
        return view('dashboard.master-data.gejala.index', compact(['gejalas']));
    }

    public function tambah()
    {
        return view('dashboard.master-data.gejala.tambah');
    }

    public function tambahStore(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
        ]);

        $gejala = new Gejala;
        $gejala->kode_gejala = $validated['kode'];
        $gejala->nama_gejala     = $validated['nama'];
        $gejala->save();

        return redirect()->route('master-data.gejala.index');
    }
}
