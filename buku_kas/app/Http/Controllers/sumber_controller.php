<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sumber_controller extends Controller
{   
    public $timestamps = true;
    public function index(){
        $sumber = \DB::table('sumber')->get();
        return view('sumber_index', compact('sumber'));
    }
    public function add(){
        return view('sumber_add');
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        \DB::table('sumber')->insert([
            //'id' =>\Uuid::generate(4),
            'nama' => $request->nama,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('sumber-pemasukan');

    }

    public function edit($id){
        $data = \DB::table('sumber') ->where('id', $id) -> first();

        return view('sumber_edit',compact('data'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'nama'=>'required',
        ]);
        \DB::table('sumber')->where('id', $id)->update([
            'nama'=>$request->nama,
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
        return redirect('sumber-pemasukan');
    }
    public function delete($id){
        \DB::table('sumber') ->where('id',$id)->delete();
        return redirect('sumber-pemasukan');
    }

    
}
