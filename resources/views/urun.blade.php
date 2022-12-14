@extends('layouts.master')
@section('title', $urun->urun_adi)
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Anasayfa</a></li>
            <li><a href="#">Kategori</a></li>
            <li class="active">{{$urun->urun_adi}}</li>
        </ol>
        <div class="bg-content">
            <div class="row">
                <div class="col-md-5">
                    <img src="https://via.placeholder.com/400x400?text=Urun+Resim+Yer+Tutucu">
                    <hr>
                    <div class="row">
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="https://via.placeholder.com/60x60?text=Urun+Resim+Yer+Tutucu"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="https://via.placeholder.com/60x60?text=Urun+Resim+Yer+Tutucu"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="#" class="thumbnail"><img src="https://via.placeholder.com/60x60?text=Urun+Resim+Yer+Tutucu"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h1>{{$urun->urun_adi}}</h1>
                    <p class="price">{{$urun->fiyat}} ₺</p>
                    <p><a href="#" class="btn btn-theme">Sepete Ekle</a></p>
                </div>
            </div>

            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#t1" data-toggle="tab">Ürün Açıklaması</a></li>
                    <li role="presentation"><a href="#t2" data-toggle="tab">Yorumlar</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="t1">{{$urun->aciklama}}</div>
                    <div role="tabpanel" class="tab-pane" id="t2">t2</div>
                </div>
            </div>

        </div>
    </div>
@endsection
