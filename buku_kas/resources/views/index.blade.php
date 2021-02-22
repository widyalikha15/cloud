@extends('welcome')

@section('content')


	<div class="container">
		<div class="card">
			<div class="card-body">

				<h3>Data Pegawai</h3>
				<a href="/pegawai/tambah" class="btn btn-primary">Input Pegawai Baru</a>
				<div class="form-group">
					
				</div>
				<form action="/pegawai/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

				<br/>

				<table class="table table-bordered">
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Umur</th>
						<th>Alamat</th>
						<th>Opsi</th>
					</tr>
					@foreach($pegawai as $p)
					<tr>
						<td>{{ $p->pegawai_nama }}</td>
						<td>{{ $p->pegawai_jabatan }}</td>
						<td>{{ $p->pegawai_umur }}</td>
						<td>{{ $p->pegawai_alamat }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $pegawai->currentPage() }} <br/>
				Jumlah Data : {{ $pegawai->total() }} <br/>
				Data Per Halaman : {{ $pegawai->perPage() }} <br/>
				<br/>

				{{ $pegawai->links() }}
			</div>
		</div>
	</div>
	@endsection