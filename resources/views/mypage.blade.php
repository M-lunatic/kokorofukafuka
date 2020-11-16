
@extends('layouts.app')

@section('content')

<div>
    <h1>{{Auth::user()->user_name}}さんのマイページ</h1>
    <ul>
        <li><a href="{{ route('diagnoses.index') }}">診断結果一覧</a></li>
        <li><a href="">登録情報の変更</a></li>
    </ul>

<a href ="">退会する</a>
</div>


@endsection