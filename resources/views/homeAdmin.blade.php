@extends('layouts.appAd')

@section('content')

<div class="container">
<div class="col-12 cusblue py-5 mb-5 ">
<h1 class="section-heading text-center custitle font-weight-bolder">Home Admin</h1>
</div>
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card ">
                <div class="card-header">Option</div>

                <div class="card-body ">
                    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2  g-4">
                        
                        <div class="col">
                            <div class="card">
                                <img src="img/paid-bill.png" width="300" height="150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Histori Pemesanan</h5>
                                    <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="{{route('notaL')}}" role="button">GO</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card">
                                <img src="img/beban.png" width="300" height="150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Input Beban</h5>
                                    <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="{{route('beban')}}" role="button">GO</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="img/bill.png" width="300" height="150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Jurnal Umum</h5>
                                    <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="{{route('jurnal')}}" role="button">GO</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="img/bill.png" width="300" height="150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Buku Besar</h5>
                                    <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="{{route('posting')}}" role="button">GO</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="img/bill.png" width="300" height="150"  class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Laporan Laba Rugi</h5>
                                    <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="{{route('labarugi')}}" role="button">GO</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img src="img/bill.png" width="300" height="150" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Isi Menu</h5>
                                    <p class="lead">
                                    <a class="btn btn-primary btn-lg" href="{{route('menu')}}" role="button">GO</a>
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
