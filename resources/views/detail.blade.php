@extends('layouts.app')

@section('content')

<div class="container">
<div class="col-12 cusblue py-5 mb-5 ">
<h1 class="section-heading text-center custitle font-weight-bolder">Detail Nota Order</h1>
</div>
    <div class="row justify-content-center">
        
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-header">Detail</div>

                <div class="card-body">
                <div class="container">
                            <table class="table table-hover" style="text-align: center;">
                                <tr>
                                    <th> No </th>
                                    <th> Item</th>
                                    <th> Jumlah </th>
                                    <th> Harga </th>
                                    
                                    
                                </tr>
                                @foreach($detail as $row)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td> {{DB::table('menu')->where('id_item', $row['id_item'])->value('nama')}} </td>
                                    <td> {{$row['qty']}} Porsi</td>
                                    <td> Rp.{{$row['harga_tot']}} </td>
                                </tr>
                                @endforeach
                            </table>
                            {{$detail->links()}}
                
                        </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        
        <div class="col-md-12 mb-5">
            <div class="card">
                <div class="card-header">Metode Pembayaran</div>

                <div class="card-body">
                <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 mb-2 g-4">
                       
                        <div class="col">
                            <div class="card">
                                <img src="/storage/imageMenu/ovo.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">OVO</h5>
                                    <p class="card-text">Bayar Dengan OVO</p>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#ovo" aria-expanded="false" aria-controls="ovo">Pilih</button>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="/storage/imageMenu/dana.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">DANA</h5>
                                    <p class="card-text">Bayar Dengan DANA</p>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#dana" aria-expanded="false" aria-controls="dana">Pilih</button>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="/storage/imageMenu/gopay.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Gopay</h5>
                                    <p class="card-text">Bayar Dengan Gopay</p>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#gopay" aria-expanded="false" aria-controls="gopay">Pilih</button>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="/storage/imageMenu/kredit.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kredit</h5>
                                    <p class="card-text">Bayar Dengan Kartu Kredit</p>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#kredit" aria-expanded="false" aria-controls="kredit">Pilih</button>
                                   
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2  g-2">
                    <div class="col">
                            <div class="card">
                                <img src="/storage/imageMenu/cash.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Tunai</h5>
                                    <p class="card-text">Bayar Dengan Tunai</p>
                                    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#tunai" aria-expanded="false" aria-controls="tunai">Pilih</button>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-md-12">
            <div class="collapse" id="ovo">
                    <div class="card ">
                        <div class="card-header">OVO</div>
                        <div class="card-body"> 
                        <h4 class="text-left"> Nomer Nota: {{$row['kode_trans']}}</h4>
                        <h4 class="text-left"> Total Pembayaran: Rp.{{$sum}}</h4>
                        <h4 class="text-left"> Metode Pembayaran: OVO</h4>
                        <form method="post" action="{{route('bayar')}}">
                                        @csrf
                                            
                                            <div class="form-group">
                                                <input type="hidden" name="id" class="form-control" value="{{$id}}"> 
                                            </div>
                                                                    
                                               <button type="submit" class="btn btn-success btn-block">Bayar</button>

                                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            <div class="collapse" id="dana">
                    <div class="card ">
                        <div class="card-header">DANA</div>
                        <div class="card-body">
                        <h4 class="text-left"> Nomer Nota: {{$row['kode_trans']}}</h4>
                        <h4 class="text-left"> Total Pembayaran: Rp.{{$sum}}</h4>
                        <h4 class="text-left"> Metode Pembayaran: DANA</h4>
                        <form method="post" action="{{route('bayar')}}">
                                        @csrf
                                            
                                            <div class="form-group">
                                                <input type="hidden" name="id" class="form-control" value="{{$id}}"> 
                                            </div>
                                                                    
                                               <button type="submit" class="btn btn-success btn-block">Bayar</button>

                                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            <div class="collapse" id="gopay">
                    <div class="card ">
                        <div class="card-header">Gopay</div>

                        <div class="card-body">
                        <h4 class="text-left"> Nomer Nota: {{$row['kode_trans']}}</h4>
                        <h4 class="text-left"> Total Pembayaran: Rp.{{$sum}}</h4>
                        <h4 class="text-left"> Metode Pembayaran: Gopay</h4>
                        <form method="post" action="{{route('bayar')}}">
                                        @csrf
                                            
                                            <div class="form-group">
                                                <input type="hidden" name="id" class="form-control" value="{{$id}}"> 
                                            </div>
                                                                    
                                               <button type="submit" class="btn btn-success btn-block">Bayar</button>

                                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            <div class="collapse" id="kredit">
                    <div class="card ">
                        <div class="card-header">Credit Card</div>

                        <div class="card-body">
                        <h4 class="text-left"> Nomer Nota: {{$row['kode_trans']}}</h4>
                        <h4 class="text-left"> Total Pembayaran: Rp.{{$sum}}</h4>
                        <h4 class="text-left"> Metode Pembayaran: Credit Card</h4>
                        <form method="post" action="{{route('bayar')}}">
                                        @csrf
                                            
                                            <div class="form-group">
                                                <input type="hidden" name="id" class="form-control" value="{{$id}}"> 
                                            </div>
                                                                    
                                               <button type="submit" class="btn btn-success btn-block">Bayar</button>

                                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            <div class="collapse" id="tunai">
                    <div class="card ">
                        <div class="card-header">Tunai</div>

                        <div class="card-body">
                        <h4 class="text-left"> Nomer Nota: {{$row['kode_trans']}}</h4>
                        <h4 class="text-left"> Metode Pembayaran: Tunai</h4>
                        <h4 class="text-left"> Uang Yang Diterima</h4>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="text" class="form-control" id="masuk" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <h4 class="text-left"> Total Pembayaran: Rp.{{$sum}}</h4>
                        <h4 class="text-left"> Kembalian:</h4>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp</span>
                            </div>
                            <input type="text" class="form-control" id="keluar" aria-label="Amount (to the nearest dollar)" disabled>
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                        <input class="btn btn-primary" type="button" onclick="bayar()" value="Cek Kembalian">
                        <script>
                        function bayar() {
                            $isi=document.getElementById("masuk").value;
                            $isi=$isi-{{$sum}};
                             document.getElementById("keluar").value = $isi;
                        }
                        </script>
                         <form method="post" action="{{route('bayar')}}">
                                        @csrf
                                            
                                            <div class="form-group">
                                                <input type="hidden" name="id" class="form-control" value="{{$id}}"> 
                                            </div>
                                                                    
                                               <button type="submit" class="btn btn-success btn-block">Bayar</button>

                                        </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="container mt-5">
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="{{route('nota')}}" role="button"><--Back</a> 
                </p>
            </div>
</div>
@endsection
