@extends('welcome')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h3>Data Simpanan</h3>
      <a href="/pemasukan/add" class="btn btn-primary">Input Simpanan Baru</a>
				<div class="form-group">	
				</div>
            <!-- Light table -->
            <div class="table-responsive">
              <table id= "table-pemasukan" class ="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Penyimpan</th>
                    <th scope="col">Nominal</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                @foreach($data as $index=>$dt)
                  <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$dt->nama}}</td>
                    <td>Rp. {{number_format($dt->nominal,0)}}</td>
                    <td>{{date('d M Y',strtotime($dt->tanggal))}}</td>
                    <td>{{$dt->keterangan}}</td>
                    <td>
							        <a class="btn btn-warning btn-sm" href="{{url('pemasukan/'.$dt->pemasukan_id)}}">Edit</a>
							        <a class="btn btn-danger btn-sm" href="">Hapus</a>
						      </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-notification" tableindex="-1" role="dialog" aria-labelledby="modal-notification"
aria-hidden="true">
<div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
    <div class="modal-content bg-gradient-danger">

      <div calss="modal-header">
        <h6 calss="modal-tittle" id="modal-tittle-notification">Your attention is required</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>

      <div class="modal-body">

        <div class="py-3 text-center">
          <i class="ni ni-bell-55 ni-3x"></i>
          <h4 class="heading mt-4">Apakah kamu yakin ingin menghapus data ini?</h4>
        </div>

      </div>

      <div class="modal-footer">
        <form action="" method="post">
          {{ csrf_field()}}
          {{method_field('delete')}}
          <button type="submit" class="btn btn-white">OK, got it</button>
        </form>
        <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
      </div>

    </div>

</div>
</div>
</div>
@endsection

