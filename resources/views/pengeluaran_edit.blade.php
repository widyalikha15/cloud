@extends('welcome')

@section('content')

<div class="container">
  <div class="card">
<div class="card-body">
                    <a href="/pengeluaran" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form action="{{url('/pengeluaran/'.$data->pengeluaran_id)}}" method="post" >

                        {{ csrf_field() }}
                        {{ method_field('put')}}
                        <div class="form-group">
                            <label >Nominal</label>
                            <input type="number" name="nominal" class="form-control" id="exampleInputPasswordl" value="{{$data->nominal}}" placeholder="Nominal">
                        </div>

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="text" name="tanggal" class="form-control datepicker" id="exampleInputPasswordl" value="{{date('d M Y',strtotime($data->tanggal))}}" placeholder="Tanggal" autocomplete="off">
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" name="keterangan" rows="10" >{{$data->keterangan}}</textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Update">
                        </div>

                    </form>

                </div>
                </div>
  </div>
@endsection
@section('script')
<script type= "text/javascript">
    $(document).ready(function(){
        $(".datepicker").datepicker();
    });
</script>
@endsection