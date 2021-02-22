@extends('welcome')

@section('content')

<div class="container">
		<div class="card">
			<div class="card-body">
                    <a href="/anggota/tambah" class="btn btn-primary">Input Anggota Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($anggota as $a)
                            <tr>
                                <td>{{ $a->nama }}</td>
                                <td>{{ $a->alamat }}</td>
                                <td>
                                    <a href="/anggota/edit/{{ $a->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/anggota/hapus/{{ $a->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
             </div>
        </div>
 @endsection