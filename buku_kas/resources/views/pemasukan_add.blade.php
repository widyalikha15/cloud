@extends('welcome')

@section('content')

<div class="container">
  <div class="card">
<div class="card-body">
                    <a href="/pemasukan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form action="{{url('/pemasukan/add')}}" method="post" >

                        {{ csrf_field() }}
                        <div class="form-group">
                        <label>Manajemen Simpanan</label>
                            <select class = "form-control", name="sumber_pemasukan">
                                <option selected="" disabled="">Pilih Anggota</option>
                                @foreach($sumber as $sb)
                                <option value="{{ $sb->id}}">{{$sb ->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Nominal</label>
                            <input type="number" name="nominal" class="form-control" placeholder="Nominal">
                        </div>

                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="text" name="tanggal" class="form-control datepicker" placeholder="Tanggal">
                        </div>

                        <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" name="keterangan" rows="10"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
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