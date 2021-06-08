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
                                <tr>
                                <td></td>
                                <td></td>
                                <td>Harga Total:</td>
                                <td>Rp.{{$sum}}</td>
                                </tr>
                            </table>
                            {{$detail->links()}}
                
                        </div> 
                </div>
            </div>
        </div>
    </div>

        
        
        
   
</div>
@endsection
