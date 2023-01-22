<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function store(Request $request)
    {
        $siswa = new Siswa;
        
        $siswa->nama = $request->nama;
        $siswa->nim = $request->nim;
        $siswa->semester = $request->semester;

        $siswa->save();

        return response()->json(["POST method succes"], 201);
    }

    public function destroy($siswaId)
    {
        
        $siswa = Siswa::find($siswaId);
        $siswa->delete();
    
        return response()->json([" DELETE methode succes"], 200);
        
    }

    public function update(Request $request, $siswaId)
    {
        $siswa = Siswa::find($siswaId);

        $siswa->nama = $request->nama;
        $siswa->nim = $request->nim;
        $siswa->semester = $request->semester;

        $siswa->save();

        return response()->json(["PUT method succes "], 201);

    }
    
}