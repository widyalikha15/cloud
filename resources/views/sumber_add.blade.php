@extends('welcome')

@section('content')

<div class="container">
  <div class="card">
<div class="card-body">
		<form action="/sumber-pemasukan/add" method="post">
			{{ csrf_field() }}
            <div class="form-group">
            <input type="text" name="nama" class="form-control" id=>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">Tambah Anggota Baru</button>
            </div>
            
		</form>
    
      </div>
    </div>
  </div>
</form>

@endsection