<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pengeluaran_controller extends Controller
{
    public function index(){
        $data = \DB::table('pengeluaran as a')->join('sumber as b','a.sumber_pengeluaran','=','b.id')->get();
        return view('pengeluaran_index',compact('data'));
    }

    public function add(){
        $sumber = \DB::table('sumber')->get();
        return view('pengeluaran_add', compact('sumber'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'sumber_pengeluaran'=>'required',
            'nominal' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required'
        ]);

        \DB::table('pengeluaran')->insert([
            //'pengeluaran_id' =>\Uuid::generate(4),
            'sumber_pengeluaran'=>$request->sumber_pengeluaran,
            'nominal'=>$request->nominal,
            'tanggal'=>date('Y-m-d', strtotime($request->tanggal)),
            'keterangan'=>$request->keterangan
        ]);

        return redirect('pengeluaran');
    }

    public function edit($id){
        $data = \DB::table('pengeluaran') ->where('pengeluaran_id',$id)->first();
        $sumber = \DB::table('sumber')->get();
        return view('pengeluaran_edit',compact('data'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'nominal' => 'required',
            'tanggal' => 'required',
            'keterangan' => 'required'
        ]);

        \DB::table('pengeluaran')->where('pengeluaran_id',$id)->update([
            'nominal'=>$request->nominal,
            'tanggal'=>date('Y-m-d', strtotime($request->tanggal)),
            'keterangan'=>$request->keterangan
        ]);

        return redirect('pengeluaran');
    }

    public function delete($id){
        \DB::table('pengeluaran')->where('pengeluaran_id',$id)->delete();

        return redirect('pengeluaran');
    }
}
