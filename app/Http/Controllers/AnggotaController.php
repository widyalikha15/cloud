<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Anggota;

class AnggotaController extends Controller
{

    public function index()
    {
    	$anggota = Anggota::all();
    	return view('anggota', ['anggota' => $anggota]);
    }

    public function tambah()
    {
    	return view('anggota_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'nama' => 'required',
    		'alamat' => 'required'
    	]);

        Anggota::create([
    		'nama' => $request->nama,
            'alamat' => $request->alamat
    	]);

    	return redirect('/anggota');
    }

    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view('anggota_edit', ['anggota' => $anggota]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'nama' => 'required',
        'alamat' => 'required',
        'created_at' => 'required',
        'updated_at' => 'required'
        ]);

        $anggota = Anggota::find($id);
        $anggota->nama = $request->nama;
        $anggota->alamat = $request->alamat;
        $anggota->save();
        return redirect('/anggota');
    }
    public function delete($id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();
        return redirect('/anggota');
    }

}