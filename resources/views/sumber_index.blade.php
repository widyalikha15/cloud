@extends('welcome')
@section('content')
<div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">manage anggota</h3>
              <a href="{{ url('sumber-pemasukan/add')}}" class="btn btn-outline-default"> Tambah</a>
              <a href="{{ url('upload')}}" class="btn btn-outline-default"> Tambah Gambar</a>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">#</th>
                    <th scope="col" class="sort" data-sort="budget">Nama</th>
                    <th scope="col" class="sort" data-sort="status">Create At</th>
                    <th scope="col" class="sort" data-sort="status">
                      <center>Action</center>
                    </th>
                  </tr>
                </thead>
                <tbody>
                @foreach($sumber as $index=>$sb)
                  <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $sb->nama }}</td>
                    <td>{{ $sb->created_at }}</td>
                    <td>
                    <center>
                      <div>
                        <a href="{{url('sumber-pemasukan/'.$sb->id)}}"><i class="ni ni-ruler-pencil"></i>
                        <span>Edit</span>
                        <a sumber-id="{{$sb->id}}" class="btn-hapus" href="{{url('sumber-pemasukan/'.$sb->id)}}"><i class="ni ni-fat-remove"></i>
                        <span>Hapus</span>
                      </div>
                    </center>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
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

          @section('script')
          <script type="text/javascript"> 
            $(document).ready(function(){
              $('.btn-hapus').click(function (e){
                e.preventDefault();
                var id= $(this).attr('sumber-id');
                var url = "{{url('sumber-pemasukan') }}"+'/'+id;
                $('#modal-notification').find('form').attr('action',url);
                $('#modal-notification').modal();
              })
            })
          </script>
          @endsection