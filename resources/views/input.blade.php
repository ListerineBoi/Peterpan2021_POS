@extends('layouts.app')

@section('content')

<div class="container">
<div class="col-12 cusblue py-5 mb-5 ">
<h1 class="section-heading text-center custitle font-weight-bolder">Input Order</h1>
</div>
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                            </ul>
                            </div>
                    @endif

                    @if(\Session::has('success'))
                        <div class="alert alert-success">
                            <p>{{\Session::get('success')}}</p>
                        </div>
                    @endif

                    @if(\Session::has('Forbidden'))
                        <div class="alert alert-danger">
                            <p>{{\Session::get('Forbidden')}}</p>
                        </div>
                    @endif
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card ">
                <div class="card-header">Menu</div>

                <div class="card-body ">
                    <div class="row row-cols-lg-3 row-cols-md-3 row-cols-sm-2 g-4">
                        @foreach($menu as $rowI)
                        <div class="col">
                            <div class="card mb-5" >
                                <img src="storage/imageMenu/{{$rowI['img']}}" width="300" height="150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$rowI['nama']}}</h5>
                                    <p class="card-text">{{$rowI['des']}}</p>
                                    <form method="post" action="{{route('additem')}}">
                                        @csrf
                                            
                                            <div class="form-group">
                                                <input type="hidden" name="id_item" class="form-control" value="{{$rowI['id_item']}}"> 
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" name="harga" class="form-control" value="{{$rowI['harga']}}"> 
                                            </div>
                                            <div class="form-group">
                                                <input type="number" class="form-control" name="qty" value="1" min="1">
                                            </div>
                                                                    
                                                <button type="submit" class="btn btn-primary">Submit</button>

                                     </form>
                                   
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- /////////////////////////////////////////////////// -->
        
        
        <!-- /////////////////////////////////////////////////// -->
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">Pesan</div>

                <div class="card-body">
                <div class="container">
                            <table class="table table-hover" style="text-align: center;">
                                <tr>
                                    <th> No </th>
                                    <th> id </th>
                                    <th> jumlah </th>
                                    <th> harga </th>
                                    <th> action </th>
                                    
                                </tr>
                                @if($item!=null)
                                @foreach($item as $row)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td> {{$row['id_item']}} </td>
                                    <td> {{$row['qty']}} </td>
                                    <td> Rp.{{$row['harga']}} </td>
                                    <form method="post" action="{{route('Delitem')}}">
                                        @csrf
                                            
                                            <div class="form-group">
                                                <input type="hidden" name="id" class="form-control" value="{{$loop->index}}"> 
                                            </div>
                                                                    
                                               <td> <button type="submit" class="btn btn-danger">Delete</button></td>

                                     </form>
                                   
                                </tr>
                                @endforeach
                                @endif
                            </table>
                            <h3>Total : Rp.{{$sum}}<h3>
                        </div>
                        <form method="post" action="{{route('inputP')}}">
                                        @csrf
                                            
                                            <div class="form-group">
                                            <label>No Meja</label>
                                                <input type="Number" min="1" name="no_meja" class="form-control" value="1"> 
                                            </div>
                                                                    
                                               <td> <button type="submit" class="btn-primary btn-lg">LANJUT</button></td>

                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
