
@extends('layouts.app')

@section('content')

<div>
<h1>診断結果画面</h1>

<h2>{{Auth::user()->user_name}}さんの性格タイプは{{ $type }}です</h2>

<a href ='https://www.google.com/'>Let's search!</a>

</div>




@endsection

