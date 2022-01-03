@extends('layouts.app')

@section('content')
      {{--  <div class="center jumbotron">
            <div class="text-center">
                <h1>都道府県　風景画像など</h1>
            </div>
        </div> --}}
         <h1 class="text-center">{!! nl2br(e($pref->name)) !!}</h1>
         <hr class="style-four" />
        <img src="{{ url('img/prefscene',[$pref->scene_image]) }}" alt="都道府県風景画像" width="800" style="display: block; margin: auto;">
        
        <h6 class="text-center">{!! nl2br(e($pref->title.' © '.$pref->creator)) !!} <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank">クリエイティブ・コモンズ・ライセンス（表示4.0 国際）</a></h6>
        
        <br><br>
        
         <div class="row">
        <div class="col-sm-6 offset-sm-3">

        
        <h2 class="text-center">{!! nl2br(e($pref->name)) !!}の魅力を投稿しよう！</h2>
        
        
<div class="list">
<ul>
    <li>「都会！」、「自然が豊か！」、「食べ物がおいしい」など、単語や短めの文でもOK！　皆が知らないような細かいところをついた魅力も大歓迎！</li>
    <li>投稿する文字数は50文字以下でお願いします。</li>
    <li>ご発言の内容は、各都道府県や個人に対する誹謗中傷、差別にならないように気をつけてください。</li>
    <li>投稿者のIPアドレスハッシュ値が表示されます。</li>
</ul>
</div>
                        {!! Form::open(['route' => ['pref.store', $pref->id]]) !!}
                      {{-- {!! Form::open(['route' => 'pref.store', [30]]) !!} --}}
    <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '2']) !!}
    </div>
    {!! Form::submit('投稿する', ['class' => 'btn btn-primary btn-block']) !!}</p>
{!! Form::close() !!}

<h5 class="text-center">
 {!! link_to_route('pref.show', '投稿せずに'.$pref->name.'の魅力を見る', [$pref->id], ['class' => 'nav-link']) !!}
 <h5 class="text-center">

</div>
</div>

<br><br><br>

        @include('commons.preflist')
@endsection