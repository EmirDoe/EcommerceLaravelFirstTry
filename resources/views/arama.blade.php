@extends('layouts.master')
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('anasayfa') }}">Anasayfa</a></li>
            <li class="active">Arama Sonucu</li>
        </ol>

        <div class="products bg-content">
            <div class="row">
                <div class="container bg-black">
                @if (count($urunler)==0)
                    <div class="col-md-12 text-center">
                        Bir ürün bulunamadı!
                    </div>
                @else
                    <div class="col-md-12 text-left text-uppercase fw-bolder " style="margin-top:20px; margin-bottom:20px; font-weight:700;">
                        arama sonucu {{ $arama_sayi }} ürün bulundu
                    </div>
                @endif
                </div>
                @foreach($urunler as $urun)
                    <div class="col-md-3 product">
                        <a href="{{ route('urun', $urun->slug) }}">
                            <img src="https://via.placeholder.com/400x485?text={{ $urun->slug }}" alt="{{ $urun->urun_adi }}">
                        </a>
                        <p>
                            <a href="{{ route('urun', $urun->slug) }}">
                                {{ $urun->urun_adi }}
                            </a>
                        </p>
                        <p class="price">{{ $urun->fiyat }}TL</p>
                    </div>
                @endforeach
            </div>
            {{ $urunler->appends(['aranan'=> old('aranan')])->links() }}
        </div>
    </div>
@endsection
