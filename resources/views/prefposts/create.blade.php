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
        <h3 class="text-center">{!! nl2br(e($pref->name)) !!}の魅力を投稿しよう！</h3>
                        {!! Form::open(['route' => ['pref.store', $pref->id]]) !!}
                      {{-- {!! Form::open(['route' => 'pref.store', [30]]) !!} --}}
    <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control', 'rows' => '2']) !!}
        {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}</p>
        {!! link_to_route('pref.show', '投稿せずに'.$pref->name.'の魅力を見る', [$pref->id], ['class' => 'nav-link']) !!}
    </div>
{!! Form::close() !!}
<br><br><br>

        @include('commons.preflist')
@endsection