@extends('layouts.app')

@section('content')

<div>
    <h1>診断TOP</h1>
    <a href ="{{ route('diagnoses.create') }}">16タイプ性格診断</a>

</div>

<div>



<h2>過去の診断結果一覧</h2>

<p>{{ $msg }}</p><br>

    @foreach($diagnosis as $dia)

    <!--結果があるときだけ表示する-->
    <table border="1">
        
            <td>タイプ : <a href ="{{ route('diagnoses.show',$dia->id ) }}">{{ $dia->type }} </a></td>
            <td>やった日時 : {{ $dia->created_at }} </td>
            <td>やりなおした日時 : {{ $dia->updated_at }} </td>

        
            <td>
                <form action="{{ route('diagnoses.destroy',$dia->id )}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除" class="btn btn-danger">
                </form>
            </td>


        
    <table>    
    
    
    @endforeach


</div>


@endsection

