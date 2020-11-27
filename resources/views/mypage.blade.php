
@extends('layouts.app')

@section('content')

<div>
    <h1>{{Auth::user()->user_name}}さんのマイページ</h1>
@php
    $user = Auth()->user();
@endphp

    <ul>
        <li><a href="{{ route('diagnoses.index') }}">診断結果一覧</a></li>
        <li><a href="{{ route('profile.show',$user) }}">登録情報の詳細</a></li>
        <!--<li><a href="{{ route('profile.edit',$user) }}">登録情報の変更</a></li>-->
    </ul>
    
    <a href ="{{ route('profile.question') }}">退会する</a>
</div>


@endsection