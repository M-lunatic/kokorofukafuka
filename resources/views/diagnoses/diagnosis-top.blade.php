@extends('layouts.app')

@section('content')

<div>
    <h1>診断一覧</h1>
    <a href ="{{ route('diagnosis.create') }}">16タイプ性格診断</a>

</div>

<div>

<h1>過去の診断結果一覧</h1>
    <!--結果があるときだけ表示する-->
    <tr>
        <td>タイプ<a href ="{{ route('diagnosis.show') }}">{{ }}</a></td>
        <td>やった日{{ }}</td>
        <td>やりなおした日{{ }}</td>
    </tr>

</div>


@endsection

