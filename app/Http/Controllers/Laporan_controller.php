<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Laporan_controller extends Controller
{
    public function index(){
        return view('laporan_index');
    }
    public function cari(Request $request){
        $this->validate($request,[
            'dari'=>'required',
            'sampai'=>'required'
        ]);
        $dari = date('Y-m-d',strtotime($request->dari));
        $sampai = date('Y-m-d',strtotime($request->sampai));

        $pemasukan = \DB::table('pemasukan as p')->join('sumber as s','p.sumber_pemasukan','=','s.id')->whereBetween('tanggal',[$dari,$sampai])->get();
        $total_pemasukan = \DB::table('pemasukan as p')->join('sumber as s','p.sumber_pemasukan','=','s.id')->whereBetween('tanggal',[$dari,$sampai])->sum('nominal');
        $pengeluaran = \DB::table('pengeluaran as q')->join('sumber as s','q.sumber_pengeluaran','=','s.id')->whereBetween('tanggal',[$dari,$sampai])->get();
        $total_pengeluaran = \DB::table('pengeluaran as q')->join('sumber as s','q.sumber_pengeluaran','=','s.id')->whereBetween('tanggal',[$dari,$sampai])->sum('nominal');

        return view('laporan_index', compact('pemasukan','pengeluaran','total_pemasukan','total_pengeluaran'));
    }
}
