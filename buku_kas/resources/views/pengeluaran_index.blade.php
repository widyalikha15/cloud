@extends('welcome')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <h3>Data Pinjaman</h3>
      <a href="/pengeluaran/add" class="btn btn-primary">Input Peminjam Baru</a>
				<div class="form-group">
					
				</div>
            <!-- Light table -->
            <div class="table-responsive">
              <table id= "table-pemasukan" class ="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Peminjam</th>
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
							        <a class="btn btn-warning btn-sm" href="{{url('pengeluaran/'.$dt->pengeluaran_id)}}">Edit</a>
							        <a href="{{url('pengeluaran/hapus/'.$dt->pengeluaran_id)}}" class="btn btn-danger btn-sm btn-hapus" >Hapus</a>
						        </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
        	
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <div class="modal-body">
            	
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">Apakah Kamu Yakin Inggin Menghapus Data Ini?</h4>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <form action="" method="post">
                {{csrf_field()}}
                {{method_field('delete')}}
                  <button type="submit" class="btn btn-white">Ok, Got it</button>
                </form>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>
  
        </div>
    </div>
  </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
      $('#table-pengeluaran').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{url('pengeluaran/yajra')}}",
        columns: [
            // or just disable search since it's not really searchable. just add searchable:false
            {data: 'rownum', name: 'rownum'},
            {data: 'sumber_pemasukan', name: 'sumber_pemasukan'},
            {data: 'nomina', name: 'nominal'},
            {data: 'tanggal', name: 'tanggal'},
            {data: 'action', name:'action', orderable: false, searchable: false}
        ]
      });
   

    $('body').on('click','.btn-hapus',function(e){
      e.preventDefault();
      var url = $(this).attr('href');
      $('#modal-notification').find('form').attr('action',url);
      $('#modal-notificatiom').modal();
    })
   })
  </script>
@endsection