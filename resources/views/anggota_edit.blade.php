
@extends('welcome')

@section('content')

<form method="post" action="/anggota/update/{{ $anggota->id }}">

{{ csrf_field() }}
{{ method_field('PUT') }}

<div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" placeholder="Nama pegawai .." value=" {{ $anggota->nama }}">

    @if($errors->has('nama'))
        <div class="text-danger">
            {{ $errors->first('nama')}}
        </div>
    @endif

</div>

<div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control" placeholder="Alamat pegawai .."> {{ $anggota->alamat }} </textarea>

     @if($errors->has('alamat'))
        <div class="text-danger">
            {{ $errors->first('alamat')}}
        </div>
    @endif

</div>

<div class="form-group">
    <input type="submit" class="btn btn-success" value="Simpan">
</div>

</form>
@endsection
