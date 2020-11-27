@extends('layouts.app')
@section('content')
@include('commons.errors')

<h1>性格診断サイト</h1>


    <a href = "{{ route('diagnoses.index') }}">診断する</a><br>
    <a href = "{{ route('mypage') }}">マイページへ</a><br>


@endsection