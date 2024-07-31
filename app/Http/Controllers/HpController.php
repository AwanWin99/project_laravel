<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hp;

class HpController extends Controller
{
    public function index(){
        $hps = hp::all();

        $data = [
            "hps" => $hps
        ];
        return view("hp.index", $data);
    }

    public function destroy($id){
        $hp = hp::where("id", $id)->first();
        $hp->delete();

        return redirect("/hp");
    }
    public function create() {
        return view("hp.tambah");

    }
        public function store(Request $request) {
            $hp = $request -> hp;
            $keterangan = $request -> keterangan;

            Hp::create([
                "hp" =>$hp,
                "keterangan" =>$keterangan,
            ]);
    
    $datahp = New hp ();
    $datahp -> hp= $hp;
    $datahp -> keterangan = $keterangan;
    $datahp -> save();

    return redirect ("/hp");
    }
    public function edit($id) {
        $hp = hp::where("id", $id)->first();

        $data = [
            "hp" => $hp
        ];
        return view("hp.edit", $data);
    }

    public function update(Request $request, $id) {
        $hp = $request->hp;
        $keterangan = $request->keterangan;

        hp::where("id", $id)->update([
            "hp" => $hp,
            "keterangan" => $keterangan,
        ]);

        return redirect("/hp");
    }
}
