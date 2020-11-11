
@extends('layouts.app')

@section('content')

<div>
<h1>診断結果画面</h1>

<h2>{{Auth::user()->user_name}}さんの性格タイプは{{ $type }}です</h2>





<tr>

    <td><p>外向:</p>{{ $XXX->$Epoint }}</td>
    <td><p>内向:</p>{{ $XXX->$Ipoint }}</td>
    <td><p>感覚:</p>{{ $XXX->$Spoint }}</td>
    <td><p>直観:</p>{{ $XXX->$Npoint }}</td>
    <td><p>思考:</p>{{ $XXX->$Tpoint }}</td>
    <td><p>感情:</p>{{ $XXX->$Fpoint }}</td>
    <td><p>計画:</p>{{ $XXX->$Jpoint }}</td>
    <td><p>知覚:</p>{{ $XXX->$Ppoint }}</td>


</tr>
<!--検索させる-->



</div>




@endsection

