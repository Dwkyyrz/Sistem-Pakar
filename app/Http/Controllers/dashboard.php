<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnosa;


class dashboard extends Controller
{
    public function index()
    {   
        $history = Diagnosa::all();
        dd($history);
        return view('dashboard.index', compact(['history']));
    }
}
