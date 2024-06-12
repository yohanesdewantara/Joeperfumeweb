<?php

namespace App\Http\Controllers;

use App\_daftar_parfum;
use Illuminate\Http\Request;


class APIController extends Controller
{
    public function searchparfum(Request $request)
    {
        $cari = $request->input('q');
        $_daftar_parfum = _daftar_parfum::where('nama_parfum', 'LIKE', "%$cari%")->get();
        if ($_daftar_parfum->isEmpty()) {
            return response()->json([
                'success' => false,
                'data' => 'Perfume not found'
            ], 404)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        } else {
            return response()->json([
                'success' => true,
                'data' => $_daftar_parfum
            ], 200)->header('Access-Control-Allow-Origin', 'http://127.0.0.1:5500');
        }
    }
}
