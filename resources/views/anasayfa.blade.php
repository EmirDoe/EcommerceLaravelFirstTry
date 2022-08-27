@extends('layouts.master')
@section('title', 'Anasayfa')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Kategoriler</div>
                    <div class="list-group categories">
                        @foreach($kategoriler as $kategori)
                        <a href="{{  route('kategori',$kategori['slug'] )}}" class="list-group-item"><i class="fa fa-arrow-circle-o-right"></i> {{ $kategori['kategori_adi'] }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($urunler_slider as $index => $urun_detay)
                        <li data-target="#carousel-example-generic" data-slide-to="$index" class="{{ $index == 0 ? 'active' : ''}}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        @foreach($urunler_slider as $index => $urun_detay )
                        <div class="item {{ $index == 0 ? 'active' : '' }}">
                            <img src="https://via.placeholder.com/640x400?text={{ $urun_detay->urun->slug }}" alt="...">
                            <div class="carousel-caption">
                                {{ $urun_detay->urun->urun_adi }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" id="sidebar-product">
                    <div class="panel-heading">Günün Fırsatı</div>
                    <div class="panel-body">
                        <a href="{{ route('urun', $urunler_firsat->slug) }}">
                            <img src="https://via.placeholder.com/400x485?text={{ $urunler_firsat->slug }}" class="img-responsive">
                            <p class="text-center">{{ $urunler_firsat->urun_adi }}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Öne Çıkan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($urunler_one_cikan as $urun_detay)
                        <div class="col-md-3 product">
                            <a href="{{ route('urun', $urun_detay->urun->slug) }}"><img src="https://via.placeholder.com/400x485?text={{ $urun_detay->urun->slug }}"></a>
                            <p><a href="{{ route('urun', $urun_detay->urun->slug) }}">{{ $urun_detay->urun->urun_adi }}</a></p>
                            <p class="price">{{ $urun_detay->urun->fiyat }} TL</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Çok Satan Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($urunler_cok_satanlar as $urun_detay)
                            <div class="col-md-3 product">
                                <a href="{{ route('urun', $urun_detay->urun->slug) }}"><img src="https://via.placeholder.com/400x485?text={{ $urun_detay->urun->slug }}"></a>
                                <p><a href="{{ route('urun', $urun_detay->urun->slug) }}">{{ $urun_detay->urun->urun_adi }}</a></p>
                                <p class="price">{{ $urun_detay->urun->fiyat }} TL</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">İndirimli Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($urunler_indirimli as $urun_detay)
                            <div class="col-md-3 product">
                                <a href="{{ route('urun', $urun_detay->urun->slug) }}"><img src="https://via.placeholder.com/400x485?text={{ $urun_detay->urun->slug }}"></a>
                                <p><a href="{{ route('urun', $urun_detay->urun->slug) }}">{{ $urun_detay->urun->urun_adi }}</a></p>
                                <p class="price">{{ $urun_detay->urun->fiyat }}TL</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
