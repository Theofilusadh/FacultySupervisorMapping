<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class RekomendasiController extends Controller
{
    public function getRekomendasi($bidang)
    {
        $dosen = Dosen::where('keahlian', 'LIKE', "%$bidang%")->first();
        return response()->json([
            'bidang' => $bidang,
            'rekomendasi_dosen' => $dosen ? $dosen->nama : 'Tidak ditemukan'
        ]);
    }
}