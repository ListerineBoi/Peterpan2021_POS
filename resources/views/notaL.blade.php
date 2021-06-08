@extends('layouts.app')

@section('content')

<div class="container">
<div class="col-12 cusblue py-5 mb-5 ">
<h1 class="section-heading text-center custitle font-weight-bolder">List Nota Order Lunas</h1>
</div>
    <div class="row justify-content-center">
        
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Lunas</div>

                <div class="card-body">
                <div class="container">
                            <table class="table table-hover" style="text-align: center;">
                                <tr>
                                    <th> No </th>
                                    <th> No Meja</th>
                                    <th> Jam Order Diterima </th>
                                    <th> Kasir Penerima </th>
                                    <th> Action </th>
                                    
                                </tr>
                                @foreach($transaksi as $row)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td> {{$row['no_meja']}} </td>
                                    <td> {{$row['created_at']}} </td>
                                    <td> {{DB::table('users')->where('id', $row['id_user'])->value('name')}} </td>
                                  
                                        <form method="post" action="{{route('detailL')}}">
                                        @csrf
                                            
                                            <div class="form-group">
                                                <input type="hidden" name="id" class="form-control" value="{{$row['id_trans']}}"> 
                                            </div>
                                                                    
                                            <td> <button type="submit" class="btn btn-success">Lihat</button></td>

                                        </form>
                                    
                                    
                        
                    
                                </tr>
                                @endforeach
                            </table>
                            
                            {{$transaksi->links()}}
                        </div>
                        </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
