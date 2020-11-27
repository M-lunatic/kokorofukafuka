@extends('layouts.app')

@section('content')

<div>
    <h1>{{Auth::user()->user_name}}さんの会員情報</h1>

    <ul>
        <li>User_id : {{ Auth::user()->user_id }} <a href="{{ route('profile.edit','user_id') }}">編集</a></li>
        <li>お名前 : {{ Auth::user()->user_name }} <a href="{{ route('profile.edit','user_name') }}">編集</a></li>
        <li>メールアドレス : {{ Auth::user()->email_address }} <a href="{{ route('profile.edit','email') }}">編集</a></li>
        <li>パスワード : <span style="color:red">セキュリティの都合上で表示しません。<a href="{{ route('profile.edit','password') }}">編集</a></span> </li>

    </ul>

    
</div>

@endsection