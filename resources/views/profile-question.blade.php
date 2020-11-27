
@extends('layouts.app')

@section('content')

@php
    $user = Auth()->user();
@endphp

<h2>本当に退会しますか？</h2>
<a href ="{{ route('profile.destroy',$user) }}">退会する</a>
<a href ="{{ route('mypage') }}">退会しない</a>

@endsection