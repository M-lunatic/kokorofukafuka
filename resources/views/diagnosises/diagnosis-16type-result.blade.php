
@extends('layouts.app')

@section('content')

<div>
<h1>診断結果画面</h1>

<h2>{{Auth::user()->user_name}}さんの性格タイプは{{ $data->$type }}です</h2>



@foreach()

<tr>

    <td><p>外向:</p>{{ $data->$Epoint }}</td>
    <td><p>内向:</p>{{ $data->$Ipoint }}</td>
    <td><p>感覚:</p>{{ $data->$Spoint }}</td>
    <td><p>直観:</p>{{ $data->$Npoint }}</td>
    <td><p>思考:</p>{{ $data->$Tpoint }}</td>
    <td><p>感情:</p>{{ $data->$Fpoint }}</td>
    <td><p>計画:</p>{{ $data->$Jpoint }}</td>
    <td><p>知覚:</p>{{ $data->$Ppoint }}</td>


</tr>
<!--検索させる-->

@endforeach


</div>




@endsection

