
@extends('layouts.app')

@section('content')

<div>
    <h1>診断結果画面</h1>

    <h2>{{Auth::user()->user_name}}さんの性格タイプは{{ $diagnosis->type }}です</h2>

    <a href ="{{ url( $diagnosis->type_url ) }}" >Let's search {{ $diagnosis->type }}!</a>
    <p>※クリックするとGoogleの検索ページに飛びます。</p><br />

    <a href ="{{ route('diagnoses.index') }}">今までやった診断結果一覧へ</a>
    

</div>


@endsection

