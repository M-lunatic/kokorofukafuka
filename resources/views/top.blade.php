@extends('layouts.app')
@section('content')
@include('commons.errors')


<h1>性格診断サイト</h1>



<a href = "{{ route('register') }}">登録する</a><br>
<a href = "{{ route('login') }}">ログインする</a><br>
<a href = "{{ route('diagnosis.index') }}">診断する</a><br>





@endsection