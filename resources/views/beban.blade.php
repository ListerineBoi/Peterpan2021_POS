@extends('layouts.appAd')

@section('content')
<div class="container">
<div class="col-12 cusblue py-5 mb-5 ">
<h1 class="section-heading text-center custitle font-weight-bolder">Beban</h1>
</div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> <strong> Input Beban </strong> </div>

                <div class="card-body">
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

                    <form method="post" action="{{route('bebanAdd')}}" enctype='multipart/form-data'>
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                        

                        <div class="form-group">
                                <label>Keterangan Beban</label>
                                <input type="text" class="form-control" name="ket" >
                            </div>

                            <div class="form-group">
                                <label>Nominal</label>
                                <input type="number" class="form-control" name="jum">
                            </div>

                            
                   
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> <strong> Daftar Pengajuan KP </strong> </div>

                    <div class="card-body"> 
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="container">
                            <table class="table table-hover" style="text-align: center;">
                                <tr>
                                    <th> No </th>
                                    <th> Keterangan </th>
                                    <th> Nominal </th>
                                    <th> Tanggal </th>
                                    
                                </tr>
                                @foreach($beban as $row)
                                <tr>
                                    <td> {{$loop->iteration}} </td>
                                    <td> {{$row['ket']}} </td>
                                    <td> {{$row['jum']}} </td>
                                    <td> {{$row['created_at']}}  </td>
                                    
                                </tr>
                                @endforeach
                               
                            </table>
                        </div>
                    </div>
             </div>
        </div>
    </div>
</div>

@endsection
