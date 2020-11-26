@extends('layouts.app')

@section('content')

<div>
    <h1>{{Auth::user()->user_name}}さんの会員情報</h1>
    
    @php
        $user = Auth()->user();
    @endphp
    <ul>
        <li><a href="{{ route('home.edit',$user->id) }}">登録情報の変更</a></li>
    </ul>

</div>


@endsection