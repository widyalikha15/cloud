@extends('welcome')

@section('content')

<div class="container">
  <div class="card">
<div class="card-body">
                    <form action="{{url('cari-laporan')}}" method="get" >

                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Dari</label>
                            <input type="text" name="dari" class="form-control datepicker" placeholder="Dari">
                        </div>
                        <div class="form-group">
                            <label>Sampai</label>
                            <input type="text" name="sampai" class="form-control datepicker" placeholder="Sampai">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Cari">
                        </div>

                    </form>
                    @if(isset($pemasukan))
                        <div class="row">
                            <div class="col-md-12">
                            <h3>Data Simpanan</h3>
                                <table class="table table-stripped">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Penyimpan</th>
                                        <th scope="col">Nominal</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pemasukan as $e=>$ps)
                                    <tr>
                                        <td>{{ $e+1 }}</td>
                                        <td>{{ $ps->nama}}</td>
                                        <td>Rp. {{ number_format($ps->nominal,0)}}</td>
                                        <td>{{ date('d M Y',strtotime($ps->tanggal))}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td>Total Simpaan:</td>
                                        <td><b><i>Rp. {{number_format($total_pemasukan,0)}}</i></b></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

                    @if(isset($pengeluaran))
                        <div class="row">
                            <div class="col-md-12">
                            <h3>Data Pinjaman</h3>
                                <table class="table table-stripped">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Peminjam</th>
                                        <th scope="col">Nominal</th>
                                        <th scope="col">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pengeluaran as $e=>$pl)
                                    <tr>
                                        <td>{{ $e+1 }}</td>
                                        <td>{{ $pl->nama}}</td>
                                        <td>Rp. {{ number_format($pl->nominal,0)}}</td>
                                        <td>{{ date('d M Y',strtotime($pl->tanggal))}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td>Total Peminjaman:</td>
                                        <td><b><i>Rp. {{number_format($total_pengeluaran,0)}}</i></b></td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

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