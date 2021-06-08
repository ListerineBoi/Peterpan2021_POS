@extends('layouts.app')

@section('content')

<div class="container">
<div class="col-12 cusblue py-5 mb-5 ">
<h1 class="section-heading text-center custitle font-weight-bolder">Home</h1>
</div>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card ">
                <div class="card-header">Option</div>

                <div class="card-body ">
                    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2  g-4">
                        
                        <div class="col">
                            <div class="card">
                                <img src="storage/imageMenu/pngegg.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Input Pesanan</h5>
                                    <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="{{route('input')}}" role="button">GO</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="storage/imageMenu/bill.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Pembayaran</h5>
                                    <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="{{route('nota')}}" role="button">GO</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="storage/imageMenu/paid-bill.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Histori Pemesanan</h5>
                                    <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="{{route('notaL')}}" role="button">GO</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
