@extends('layouts.master')
@section('title', $kategori->kategori_adi)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Anasayfa</a></li>
            <li class="active"><a href="{{$kategori->slug}}">{{ $kategori->kategori_adi }}</a></li>
        </ol>
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $kategori->kategori_adi }}</div>
                    <div class="panel-body">
                        @if(count($urunler)>0)
                        <h3>Alt Kategoriler</h3>
                        <div class="list-group categories">
                            @foreach($childKategori as $kategoriList)
                            <a href="{{route('kategori', $kategoriList->slug)}}" class="list-group-item"><i class="fa fa-arrow-circle-o-right"></i>{{ $kategoriList->kategori_adi }}</a>
                            @endforeach
                        </div>
                        @else
                            <div>Bu kategorinin alt kategorisi bulunmamaktadır.</div>

                        @endif
                        @if(count($urunler)>0)
                        <h3>Fiyat Aralığı</h3>
                        <form>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 100-200
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> 200-300
                                    </label>
                                </div>
                            </div>
                        </form>
                        @endif
                    </div>

                </div>
            </div>

            <div class="col-md-9">

                <div class="products bg-content">
                    @if(count($urunler)>0)
                    Sırala
                    <a href="#" class="btn btn-default">Çok Satanlar</a>
                    <a href="#" class="btn btn-default">Yeni Ürünler</a>
                    <hr>
                    @endif

                    <div class="row">
                        @if(count($urunler)==0)
                            <div class="col-md-12"> Bu Kategoride Henüz Ürün Bulunmamaktadır.</div>
                        @endif
                        @foreach($urunler as $urun)
                            <div class="col-md-3 product">
                                <a href="{{ route('urun', $urun->slug) }}"><img src="https://via.placeholder.com/400x400?text=Urun+Resim+Yer+Tutucu""></a>
                                <p><a href="{{ route('urun', $urun->slug) }}">{{ $urun->urun_adi }}</a></p>
                                <p class="price">{{ $urun->fiyat }} TL</p>
                                <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
