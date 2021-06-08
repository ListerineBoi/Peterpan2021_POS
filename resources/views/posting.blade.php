@extends('layouts.appAd')

@section('content')
<div class="container">
<div class="col-12 cusblue py-5 mb-5 ">
<h1 class="section-heading text-center custitle font-weight-bolder">Buku Besar</h1>
</div>                 
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <strong> Kas </strong> </div>
                    <div class="card-body">
                                    <table class="table table-hover" align="center">
                                    <tr>
                                        <th> Tanggal </th>
                                        <th> Keterangan </th>
                                        <th> Ref </th>
                                        <th> Debit </th>
                                        <th> Kredit </th>
                                        <th> Saldo </th>

                                    <tr>
                                    @php 
                                    $Saldokas=0;
                                    @endphp
                                    @foreach($kas as $row)
                                    @php 
                                    $Saldokas=$Saldokas+$row['debit']-$row['kredit'];
                                    @endphp
                                        <tr>
                                            <td> {{$row['tgl']}} </td>
                                            <td> {{$row['ket']}} </td>
                                            <td> - </td>
                                            <td> {{$row['debit']}} </td>
                                            <td> {{$row['kredit']}} </td>
                                            <td> {{$Saldokas}} </td>
                                        </tr>
                                    @endforeach
                                    </table>
                    </div>
                </div>
            </div>
        </div>


      
      <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> <strong> Penjualan </strong> </div>
                        <div class="card-body">
                                        <table class="table table-hover" align="center">
                                        <tr>
                                            <th> Tanggal </th>
                                            <th> Keterangan </th>
                                            <th> Ref </th>
                                            <th> Debit </th>
                                            <th> Kredit </th>
                                            <th> Saldo </th>

                                        <tr>
                                        @php 
                                        $Saldopenj=0;
                                        @endphp
                                        @foreach($penj as $row)
                                            <tr>
                                            @php 
                                            $Saldopenj=$Saldopenj+$row['debit']-$row['kredit'];
                                            @endphp
                                                <td> {{$row['tgl']}} </td>
                                                <td> {{$row['ket']}} </td>
                                                <td> - </td>
                                                <td> {{$row['debit']}} </td>
                                                <td> {{$row['kredit']}} </td>
                                                <td> {{$Saldopenj}} </td>
                                            </tr>
                                        @endforeach
                                        </table>
                        </div>
                    </div>
                </div>
        </div>
   
      @foreach($Beban as $row)
      <div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> <strong> {{$row['ket']}} </strong> </div>
                        <div class="card-body">
                                        <table class="table table-hover" align="center">
                                        <tr>
                                            <th> Tanggal </th>
                                            <th> Keterangan </th>
                                            <th> Ref </th>
                                            <th> Debit </th>
                                            <th> Kredit </th>
                                            <th> Saldo </th>

                                        <tr>
                                        @php 
                                        $Saldobeb=0;
                                        @endphp
                                            <tr>
                                            @php 
                                            $Saldobeb=$Saldobeb+$row['debit']-$row['kredit'];
                                            @endphp
                                                <td> {{$row['tgl']}} </td>
                                                <td> {{$row['ket']}} </td>
                                                <td> - </td>
                                                <td> {{$row['debit']}} </td>
                                                <td> {{$row['kredit']}} </td>
                                                <td> {{$Saldobeb}} </td>
                                            </tr>
                                        
                                        </table>
                        </div>
                </div>
            </div>
        </div>
        @endforeach
        
      
  </div>

  
  @endsection