@extends('layouts.appAd')

@section('content')
<div class="container">
<div class="col-12 cusblue py-5 mb-5 ">
<h1 class="section-heading text-center custitle font-weight-bolder">Menu Restoran</h1>
</div>     
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"> <strong> Isi Menu Restoran </strong> </div>

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

                    <form method="post" action="{{route('addmenu')}}" enctype='multipart/form-data'>
                    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

                        

                            <div class="form-group">
                                <label for="formGroupExampleInput">Nama Menu</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Harga</label>
                                <input type="number" class="form-control" name="harga" >
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput"> Deskripsi </label>
                                <textarea class="form-control" name="des" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label> Jenis Item </label>
                                <select name ="jenis" class="custom-select">
                                <option value="0">Makanan</option>
                                <option value="1">Minuman</option>
                                <option value="2">Lainya</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="file"> IMG </label>
                                    <div class="custom-file">
                                        <input type="file" class="form-control-file" id="file" name="img">
                                        <label class="form-control-file" for="file"></label>
                                    </div>
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
                            @foreach($menu as $row)
                                <tr>
                                    <th> No </th>
                                    <th> Nama </th>
                                    <th> Harga </th>
                                    <th> Deskripsi </th>
                                    <th> file </th>
                                    <th> action </th>
                                </tr>
                               <tr>
                               <td>{{$loop->iteration}}</td>
                               <td>{{$row['nama']}}</td>
                               <td>{{$row['harga']}}</td>
                               <td>{{$row['des']}}</td>
                               <td>@php if($row['img']!=null) echo 'Ada';@endphp</td>
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