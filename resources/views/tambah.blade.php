@extends('welcome')

@section('content')

<div class="container">
  <div class="card">
	<div class="card-body">
		<form action="/pegawai/store" method="post">
			{{ csrf_field() }}
			Nama <input type="text" name="nama" required="required" class="form-control"> <br/>
			Jabatan <input type="text" name="jabatan" required="required" class="form-control"> <br/>
			Umur <input type="number" name="umur" required="required" class="form-control"> <br/>
			Alamat <textarea name="alamat" required="required" class="form-control"></textarea> <br/>
			<input type="submit" value="Tambah Pegawai Baru" class="btn btn-info" >
		</form>
    </div>
  </div>
</div>
@endsection
