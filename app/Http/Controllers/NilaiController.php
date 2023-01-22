<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;

class NilaiController extends Controller
{

    /*public function tambah($nilaiLat1,
    $nilaiLat2 ,
    $nilaiLat3 ,
    $nilaiLat4 ,
    $nilaiHar1 ,
    $nilaiHar2 ,
    $nilaiUts ,
    $nilaiUas){
        $nilaiLat1 =  $nilaiLat2 + $nilaiLat3 + $nilaiLat4 + $nilaiLat1;
        $nilaiLat1 *= 0.15;
    
        $nilaiHar1 = $nilaiHar1 + $nilaiHar2;
        $nilaiHar1 *= 0.20;
        
        $nilaiUts *= 0.25;
        $nilaiUas *= 0.40;
    
        $tot =  $nilaiLat1 + $nilaiHar1 +   $nilaiUts + $nilaiUas;
    }*/
    

    public function store(Request $request)
    {
        $nilai = new Nilai;
        
       

        $nilai->lat1 = $request->lat1;
        $nilai->lat2 = $request->lat2;
        $nilai->lat3 = $request->lat3;
        $nilai->lat4 = $request->lat4;
        $nilai->har1 = $request->har1;
        $nilai->har2 = $request->har2;
        $nilai->uts = $request->uts;
        $nilai->uas = $request->uas;

        $request->lat1 =  $request->lat2 + $request->lat3 + $request->lat4 +  $request->lat1;
        $request->lat1 = $request->lat1 / 4 * 0.15;
    
        $request->har1 = $request->har1 + $request->har2;
        $request->har1 = $request->har1 / 2 * 0.20;
        
        $request->uts *= 0.25;
        $request->uas *= 0.40;
    
        $tot =  $request->lat1 + $request->har1 + $request->uts + $request->uas;

        $nilai->tot = $tot;

        $nilai->save();

        return response()->json(["PUSH method succes"], 201);
    }

    public function destroy($kelasId)
    {
        
        $kelas = Kelas::find($kelasId);
        $kelas->delete();
    
        return response()->json(["result" => "ok"], 200);
        
    }

    public function update(Request $request, $nilaiId)
    {
        $nilai = Nilai::find($nilaiId);

        $nilai->lat1 = $request->lat1;
        $nilai->lat2 = $request->lat2;
        $nilai->lat3 = $request->lat3;
        $nilai->lat4 = $request->lat4;
        $nilai->har1 = $request->har1;
        $nilai->har2 = $request->har2;
        $nilai->uts = $request->uts;
        $nilai->uas = $request->uas;

        $request->lat1 =  $request->lat2 + $request->lat3 + $request->lat4 +  $request->lat1;
        $request->lat1 = $request->lat1 / 4 * 0.15;
    
        $request->har1 = $request->har1 + $request->har2;
        $request->har1 = $request->har1 / 2 * 0.20;
        
        $request->uts *= 0.25;
        $request->uas *= 0.40;
    
        $tot =  $request->lat1 + $request->har1 + $request->uts + $request->uas;

        $nilai->tot = $tot;

        $nilai->save();

        return response()->json(["PUT method succes"], 201);

    }
    
}