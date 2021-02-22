<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gambar;

class UploadController extends Controller
{
	public function upload(){
		$gambar = \DB::table('gambar')->get();
		return view('upload',['gambar' => $gambar]);
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

		$nama_file = time()."_".$file->getClientOriginalName();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);

		\DB::table('gambar')->insert([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);

		return redirect()->back();
	}
}