@extends('layouts.app')

@section('content')
        {{-- <div class="center jumbotron">
            <div class="text-center">
                <h1>都道府県の魅力を投稿しよう！</h1>
            </div>
        </div> --}}
        
        <img src="{{ secure_asset('img/top1.jpg') }}" alt="PREFEATUREトップ画像1" width="1000" style="display: block; margin: auto;">
        <h6 class="text-center">渋峠の雲海 （© Koichi_Hayakawa <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">クリエイティブ・コモンズ・ライセンス（表示4.0 国際）</a>）を改変して作成</h6>
        
        <img src="{{ secure_asset('img/top5.jpg') }}" alt="PREFEATUREトップ画像5" width="1000" style="display: block; margin: auto;">
          
        <div class="container container-m">
  <div class="row">
    
    <div class="col-md-6  img-hidden">
        
      <img src="{{ secure_asset('img/top2.jpg') }}" alt=PREFEATUREトップ画像2" width="500"> 
       <h6 class="text-center">渋峠の雲海 © Koichi_Hayakawa</h6>
        <h6 class="text-center"><a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">クリエイティブ・コモンズ・ライセンス（表示4.0 国際）</a></h6>
        
    </div>
    <div class="col-md-5">
    <div class="text-center">
      <h3>都道府県の魅力を投稿しよう！</h3>
      <h3>都道府県の魅力を投稿しよう！aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</h3>
      </div>
    </div>
  </div>
</div>

        @include('commons.preflist')
@endsection