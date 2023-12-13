<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerusakan;

class KerusakanController extends Controller
{
    public function index()
    {
        $kerusakans = Kerusakan::all();
        return view('dashboard.master-data.kerusakan.index', compact(['kerusakans']));
    }

    public function tambah()
    {
        return view('dashboard.master-data.kerusakan.tambah');
    }

    public function tambahStore(Request $request)
    {
        $validated = $request->validate([
            'kode' => 'required',
            'nama' => 'required',
        ]);

        $kerusakan = new Kerusakan;
        $kerusakan->kode_kerusakan = $validated['kode'];
        $kerusakan->nama_kerusakan = $validated['nama'];
        $kerusakan->save();

        return redirect()->route('master-data.kerusakan.index');
    }
}
