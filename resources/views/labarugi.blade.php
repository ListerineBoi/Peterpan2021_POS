@extends('layouts.appAd')

@section('content')
<div class="container">
<div class="col-12 cusblue py-5 mb-5 ">
<h1 class="section-heading text-center custitle font-weight-bolder">Laporan Laba Rugi</h1>
</div>                 
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                    <div class="card-body">
                    <h2 class="text-center text-uppercase">Laporan Laba Rugi</h2>  
                    <h4 class="text-center text-uppercase">Per Tanggal 31</h4> 
                    <br><br><br>   
                    <h5 class="text-left font-weight-bolder">Pendapatan</h5>   
                    <br>  
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2">
                    <div class="col"> <h5 class="pl-5 ml-5 font-weight-bold col">Penjualan</h5>  </div>
                    <div class="col"><h5 class="text-center  font-weight-bold col">Rp.{{DB::table("jurnal-posting")->where('ket','=','Penjualan')->sum("kredit")}}</h5> </div>
                    </div>
                    <br><br>
                    <h5 class="text-left font-weight-bolder">Beban</h5>   
                    <br>
                    @foreach($Beban as $row)
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2">
                    <div class="col"> <h5 class="pl-5 ml-5 text-capitalize font-weight-bold col">{{$row['ket']}}</h5>  </div>
                    <div class="col"><h5 class="text-center font-weight-bold col">Rp.{{$row['jum']}}</h5> </div>
                    </div>
                    @endforeach
                    <hr>
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2">
                    <div class="col"> <h5 class="text-capitalize font-weight-bold col">Total</h5>  </div>
                    <div class="col"><h5 class="text-center font-weight-bold col">Rp.{{DB::table("beban")->sum("jum")}}</h5> </div>
                    </div>
                    <br>
                    <div class="row row-cols-2 row-cols-sm-2 row-cols-md-2">
                    <div class="col"> <h5 class="text-capitalize font-weight-bold col">Laba Rugi</h5>  </div>
                    <div class="col"><h5 class="text-center font-weight-bold col">Rp.{{DB::table("jurnal-posting")->where('ket','=','Penjualan')->sum("kredit")-DB::table("beban")->sum("jum")}}</h5> </div>
                    </div>
                </div>
            </div>
        </div>



        
      
  </div>

  
  @endsection