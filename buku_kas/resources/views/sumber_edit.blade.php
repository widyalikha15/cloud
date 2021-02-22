@extends('welcome')

@section('content')


  <div class="row">
    <div class="col-md-6">
		<form action="{{'/sumber-pemasukan/'.$data->id}}" method="post">
			{{ csrf_field() }}
            {{method_field('put')}}
            <div class="form-group">
            <input type="text" name="nama" class="form-control form-control-alternative" id= 
            "exampleFormControlInput1" value="{{$data->nama}}" placeholder="Tambah">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">Edit</button>
            </div>
		</form>
      </div>
    </div>
  </div>

@endsection