
@extends('layouts.app')

@section('content')
<h2>本当に退会しますか？</h2>
<a href ="{{ route('home/destroy',$user->id) }}">退会する</a>
<a href ="{{ route('mypage') }}">退会しない</a>

@endsection