@extends('layouts.appAd')

@section('content')
<div class="container">
<div class="col-12 cusblue py-5 mb-5 ">
<h1 class="section-heading text-center custitle font-weight-bolder">Jurnal Umum</h1>
</div>
<button class="btn btn-success btn-lg  my-2"> <a style="color:white;text-decoration: none;" href="{{route('prosJurnal')}}"> Buat Jurnal umum dan Buku Besar </a> </button>
<div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header"> <strong> Jurnal </strong> </div>
            <div class="card-body">
                            <table class="table table-hover" align="center">
                            <tr>
                                <th> Tanggal </th>
                              
                                <th> Keterangan </th>
                                <th> ID Transaksi/Beban </th>
                                <th> Debit </th>
                                <th> Kredit </th>

                            <tr>
                            @foreach($jur as $row)
                                <tr>
                                    <td> {{$row['tgl']}} </td>
                               
                                    <td> {{$row['ket']}} </td>
                                    <td> {{$row['id_trans']}}{{$row['id_beban']}}  </td>
                                    <td> {{$row['debit']}} </td>
                                    <td> {{$row['kredit']}} </td>
                                </tr>
                            @endforeach
                                <tr>
                                <td>  </td>
                                <td> TOTAL </td>
                                <td> : </td>
                                <td> {{DB::table("jurnal-posting")->get()->sum("debit")}} </td>
                                <td> {{DB::table("jurnal-posting")->get()->sum("kredit")}} </td>    
                                    
                                </tr>
                            </table>
            </div>
        </div>
        </div>

      </div>
  </div>

  
  @endsection