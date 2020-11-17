
@extends('layouts.app')

@section('content')

<div>
    <h1>診断結果画面　詳細show</h1>

    <h2>{{Auth::user()->user_name}}さんの性格タイプは{{ $diagnosis[1] }}です</h2>

    <a href ="{{ url( $diagnosis[0] ) }}" >Let's search {{ $diagnosis[1] }}!</a>
    <p>※クリックするとGoogleの検索ページに飛びます。</p><br />

    <a href ="{{ route('diagnoses.index') }}">今までやった診断結果一覧へ</a>


</div>


@endsection

