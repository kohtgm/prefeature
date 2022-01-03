@extends('layouts.app')

@section('content')
        {{-- <div class="center jumbotron">
            <div class="text-center">
                <h1>都道府県の魅力を投稿しよう！</h1>
            </div>
        </div> --}}
        
        <img src="{{ secure_asset('img/top5.jpg') }}" alt="PREFEATUREトップ画像1" width="1000" style="display: block; margin: auto;">
        <h6 class="text-center">渋峠の雲海 （© Koichi_Hayakawa <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">クリエイティブ・コモンズ・ライセンス（表示4.0 国際）</a>）を改変して作成</h6>
        
        
          
<div class="container container-m">
  <div class="row">
    
    <div class="col-md-6  img-hidden">
        
      <img src="{{ secure_asset('img/top6.jpg') }}" alt=PREFEATUREトップ画像2" width="500"> 
       <h6 class="text-center">新倉山浅間公園（忠霊塔）の桜 © Koichi_Hayakawa</h6>
        <h6 class="text-center"><a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">クリエイティブ・コモンズ・ライセンス（表示4.0 国際）</a></h6>
        
    </div>
    
    
    <div class="col-md-5">
    <div class="text-center">
      <h4 style="color:#db7093;">PREFEATURE(プリフィーチャー)は<br>都道府県の魅力を共有するサイトです。</h4>
    </div>
    <br>
    <h5>日本には、魅力的な食、自然、観光スポットがたくさんあります。しかし私たちが知っている魅力は、ほんの一部でしかありません。そこに住んでいる、行ったことがある人しか知らないような魅力もあるでしょう。そのような魅力をみんなで共有するために、PREFEATUREは生まれました。</h5>
    </div>
    
  </div>
  
</div>



<div class="container container-m">
  <div class="row">
    
    <div class="col-md-6  img-hidden">
        
      <img src="{{ secure_asset('img/top7.jpg') }}" alt=PREFEATUREトップ画像2" width="500"> 
       <h6 class="text-center">白川郷（天守閣展望台） © SHori</h6>
        <h6 class="text-center"><a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">クリエイティブ・コモンズ・ライセンス（表示4.0 国際）</a></h6>
        
    </div>
    
    
    <div class="col-md-5">
        <br>
    <h5>PREFEATUREは、各都道府県の魅力をランキング形式にはいたしません。都道府県ごとに、皆さんが感じている魅力を自由に投稿して閲覧することができます。投稿内容は、定番のものから、細かいところをついたものまで、あなたが感じていることでOKです。地元の良さを伝えたい！ 旅行に行って素晴らしかった！ 行ったことはないけど自分の"推し"を応援したい！ というあなた、ぜひ投稿してみてください。PREFEATUREが、都道府県の魅力を伝えることにお役に立てれば幸いです。</h5>
    </div>
    
  </div>
  
  
  
</div>

        @include('commons.preflist')
@endsection