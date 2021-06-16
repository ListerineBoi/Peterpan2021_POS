@extends('layouts.appAd')

@section('content')
<div class="container">
<div class="col-12 cusblue py-5 mb-5 ">
<h1 class="section-heading text-center custitle font-weight-bolder">Menu Restoran</h1>
</div>     
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> <strong> Edit Menu Restoran </strong> </div>

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

                        <form method="post" action="{{route('editmenu')}}" enctype='multipart/form-data'>
                        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

                            
                        <input type="hidden" class="form-control" name="id" value="{{$menu[0]->id_item}}">
                        <input type="hidden" class="form-control" name="olimg" value="{{$menu[0]->img}}">
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Nama Menu</label>
                                    <input type="text" class="form-control" name="nama" value="{{$menu[0]->nama}}">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">Harga</label>
                                    <input type="number" class="form-control" name="harga" value="{{$menu[0]->harga}}">
                                </div>
                                <div class="form-group">
                                    <label for="formGroupExampleInput"> Deskripsi </label>
                                    <textarea class="form-control" name="des" rows="3">{{$menu[0]->des}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label> Jenis Item </label>
                                    <select name ="jenis" class="custom-select">
                                    @if($menu[0]->jenis==0)
                                    <option value="0" selected>Makanan</option>
                                    <option value="1">Minuman</option>
                                    <option value="2">Lainya</option>
                                    @elseif($menu[0]->jenis==1)
                                    <option value="0">Makanan</option>
                                    <option value="1" selected>Minuman</option>
                                    <option value="2">Lainya</option>
                                    @elseif($menu[0]->jenis==2)
                                    <option value="0">Makanan</option>
                                    <option value="1">Minuman</option>
                                    <option value="2" selected>Lainya</option>
                                    @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="file"> IMG </label>
                                        <div class="custom-file">
                                            <input type="file" class="form-control-file" id="file" name="img">
                                            <label class="form-control-file" for="file">{{$menu[0]->img}}</label>
                                        </div>
                                </div>
                    
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                    
                    </div>
        </div>
    </div>
</div>

@endsection