<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function show($kelas)
    {
        return view('kelas', [
            'kelas' => Kelas::where('class', '=', $class)->first()
        ]);
    }

    public function store(Request $request)
    {
        $kelas = new Kelas;
        
        $kelas->class = $request->class;
        $kelas->jurusan = $request->jurusan;
        $kelas->guru = $request->guru;

        $kelas->save();

        return response()->json(["result => ok"], 201);
    }

    public function destroy($kelasId)
    {
        
        $kelas = Kelas::find($kelasId);
        $kelas->delete();
    
        return response()->json(["result" => "ok"], 200);
        
    }

    public function update(Request $request, $kelasId)
    {
        $kelas = Kelas::find($kelasId);

        $kelas->class = $request->class;
        $kelas->jurusan = $request->jurusan;
        $kelas->guru = $request->guru;

        $kelas->save();

        return response()->json(["result => ok"], 201);

    }
    
}