
@extends('layouts.app')

@section('content')

<div>
    <h1>診断結果画面</h1>

    <h2>{{Auth::user()->user_name}}さんの性格タイプは{{ $diagnoses->type }}です</h2>

    <a href ="{{ url($diagnoses->type_url) }}" >Let's search {{ $diagnoses->type }}!</a>
    <p>※クリックするとGoogleの検索ページに飛びます。</a>

    <a href ="{{ route('diagnoses.index') }}">今までやった診断結果一覧へ</a>

    <div class ='buttons'>
        <a href="{{ route('diagnoses.edit') }}">診断をやりなおす</a>
        <a href="{{ route('diagnoses.destroy') }}">診断を削除する</a>
    </div>


</div>


@endsection

