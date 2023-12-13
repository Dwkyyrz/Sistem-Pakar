<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerusakan;
use App\Models\Gejala;
use App\Models\Relasi;

class RelasiController extends Controller
{
    public function index()
    {
        $relasis = Relasi::all();
        return view('dashboard.master-data.relasi.index', compact(['relasis']));
    }

    public function tambah()
    {
        $kerusakans = Kerusakan::all();
        $gejalas = Gejala::all();
        return view('dashboard.master-data.relasi.tambah', compact(['kerusakans', 'gejalas']));
    }

    public function tambahStore(Request $request)
    {
        $validated = $request->validate([
            'kerusakan' => 'required',
            'gejala' => 'required',
        ]);
        $gejalaArray = $validated['gejala'];
        $kerusakanId = $validated['kerusakan'];

        foreach ($gejalaArray as $gejalaId) {
            $relasi = new Relasi;
            $relasi->gejala_id = $gejalaId;
            $relasi->kerusakan_id = $kerusakanId;
            $relasi->save();
        }

        return redirect()->route('master-data.relasi.index');
    }
}
