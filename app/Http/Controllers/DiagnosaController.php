<?php

namespace App\Http\Controllers;

use App\Models\Diagnosa;
use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Kerusakan;
use App\Models\Relasi;
// use App\Models\Diagnosa

class DiagnosaController extends Controller
{

    
    

    public function index()
    {
        if (!is_null(session())) {
            $nama = session('nama');
            $alamat = session('alamat');
            $pekerjaan = session('pekerjaan');
            return view('diagnosa.index', compact(['nama', 'alamat', 'pekerjaan']));
        } else {
            return view('diagnosa.index');
        }
    }

    public function indexStore(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
        ]);

        session([
            'nama' => $validated['nama'],
            'kelamin' => $validated['jenis_kelamin'],
            'alamat' => $validated['alamat'],
            'pekerjaan' => $validated['pekerjaan'],
        ]);

        return redirect()->route('diagnosa.pertanyaan');
    }

    public function pertanyaan()
    {
        $gejalas = Gejala::all();
        return view('diagnosa.pertanyaan', compact(['gejalas']));
    }

    public function pertanyaanStore(Request $request)
    {
        $validated = $request->validate([
            'gejala' => 'required',
        ]);
        $nama = session('nama');
        $kelamin = session('kelamin');
        $alamat = session('alamat');
        $pekerjaan = session('pekerjaan');
        $gejalaArray = $validated['gejala'];
        $penyakitCocok = Kerusakan::where(function ($query) use ($gejalaArray) {
            foreach ($gejalaArray as $gejala) {
                $query->whereHas('relasis', function ($relasisQuery) use ($gejala) {
                    $relasisQuery->where('gejala_id', $gejala);
                });
            }
        })->get();
        if (!is_null($penyakitCocok->first())) {
            $kodePenyakit = $penyakitCocok->first()->kode_kerusakan;
            $cekGejala = Relasi::where('kerusakan_id', $kodePenyakit)->get();
            if (count($cekGejala) === count($gejalaArray)) {
                $penyakit = $penyakitCocok->first();
                $gejalas = Gejala::whereIn('kode_gejala', $gejalaArray)->get();

                // meynimpan hasilnya
                $diagnosa = new Diagnosa([
                    'nama' => $nama,
                    'kelamin' => $kelamin,
                    'alamat' => $alamat,
                    'pekerjaan' => $pekerjaan,
                    'kerusakan_id' => $penyakit->id,
                ]);

                $diagnosa->save();

                return view('diagnosa.hasil', compact(['nama', 'kelamin', 'alamat', 'pekerjaan', 'penyakit', 'gejalas']));
            } else {
                return view('diagnosa.kosong');
            }
        } else {
            return view('diagnosa.kosong');
        }
    }
}
