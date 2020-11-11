
@extends('layouts.app')

@section('content')

<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">


</script>
</head>






<h1>診断画面</h1>
<div>
    <form method="POST" action="{{ route('diagnosises.store') }}">
    {{ csrf_field() }}


    <!-- E or I name=EorI? value=check? -->
    <ol>
    <li>大人数の前に出ると…<br /></li>
    <label>{{Form::radio('EorI1', 'E',false,['class' => 'question'])}}イキイキする</label>
    <label>{{Form::radio('EorI1', 'I',false,['class' => 'question'])}}緊張する</label><br>
    
    <li>自分の感じたことは…<br /></li>
    <label>{{Form::radio('EorI2', 'E',false,['class' => 'question'])}}周りに表現したい</label>
    <label>{{Form::radio('EorI2', 'I',false,['class' => 'question'])}}自分の心にとどめておきたい</label><br>
    
    <li>興味のあることは…<br /></li>
    <label>{{Form::radio('EorI3', 'E',false,['class' => 'question'])}}広く浅く</label>
    <label>{{Form::radio('EorI3', 'I',false,['class' => 'question'])}}狭く深く</label><br>

    <li>話すときは…<br /></li>
    <label>{{Form::radio('EorI4', 'E',false,['class' => 'question'])}}考えながら話す</label>
    <label>{{Form::radio('EorI4', 'I',false,['class' => 'question'])}}考えてから話す</label><br>

    <li>元気が出るのは…<br /></li>
    <label>{{Form::radio('EorI5', 'E',false,['class' => 'question'])}}誰かと一緒にいるとき</label>
    <label>{{Form::radio('EorI5', 'I',false,['class' => 'question'])}}一人でいるとき</label><br>



    <!-- S or N -->
    <li>ニュースを見てるときは…<br /></li>
    <label>{{Form::radio('SorN1', 'S',false,['class' => 'question'])}}実際に何が起きたか具体的な事実に目を向ける</label>
    <label>{{Form::radio('SorN1', 'N',false,['class' => 'question'])}}次に何が起こりそうなのか考える</label><br>

    <li>結論を出すときは…<br /></li>
    <label>{{Form::radio('SorN2', 'S',false,['class' => 'question'])}}事実を1つ1つ注意深く積み上げて結論を出す</label>
    <label>{{Form::radio('SorN2', 'N',false,['class' => 'question'])}}事実を抽象化して類似する情報を基に結論を出す</label><br>

    <li>「人間は○○が大事」どちらかの文字を入れるとしたら…<br /></li>
    <label>{{Form::radio('SorN3', 'S',false,['class' => 'question'])}}経験</label>
    <label>{{Form::radio('SorN3', 'N',false,['class' => 'question'])}}ひらめき</label><br>

    <li>アイデアを出すときに重視するのは…<br /></li>
    <label>{{Form::radio('SorN4' ,'S',false,['class' => 'question'])}}実際にやることが可能であり、無駄のないこと</label>
    <label>{{Form::radio('SorN4', 'N',false,['class' => 'question'])}}斬新で好奇心が掻き立てられるか</label><br>

    <li>物事について知るときに大事なのは…<br /></li>
    <label>{{Form::radio('SorN5', 'S',false,['class' => 'question'])}}実際にモノに触れて経験してみること</label>
    <label>{{Form::radio('SorN5', 'N',false,['class' => 'question'])}}アイデアや理論を知って応用すること</label><br>



    <!-- T or F -->
    <li>問題が起きたときは…<br /></li>
    <label>{{Form::radio('TorF1', 'T',false,['class' => 'question'])}}問題について分析する</label>
    <label>{{Form::radio('TorF1', 'F',false,['class' => 'question'])}}他に困ってる人がいないか様子を見る</label><br>

    <li>議論や話し合いをするとき重視するのは…<br /></li>
    <label>{{Form::radio('TorF2', 'T',false,['class' => 'question'])}}合理的で筋道が通ること</label>
    <label>{{Form::radio('TorF2', 'F',false,['class' => 'question'])}}結論が人にどう影響するか</label><br>

    <li>どちらかというと自分は…<br /></li>
    <label>{{Form::radio('TorF3', 'T',false,['class' => 'question'])}}正義の為なら争いを恐れない</label>
    <label>{{Form::radio('TorF3', 'F',false,['class' => 'question'])}}争いごとは苦手で調和を好む</label><br>

    <li>人付き合いで大事なのは…<br /></li>
    <label>{{Form::radio('TorF4', 'T',false,['class' => 'question'])}}公平であること</label>
    <label>{{Form::radio('TorF4', 'F',false,['class' => 'question'])}}相手の気持ちに寄り添うこと</label><br>

    <li>人から言われがちなのは…<br /></li>
    <label>{{Form::radio('TorF5', 'T',false,['class' => 'question'])}}しっかりしてる、賢い</label>
    <label>{{Form::radio('TorF5', 'F',false,['class' => 'question'])}}親しみやすい、優しい</label><br>



    <!-- J or P -->

    <li>作業をするときは…<br /></li>
    <label>{{Form::radio('JorP1', 'J',false,['class' => 'question'])}}スケジュールを作りそれに沿って進める</label>
    <label>{{Form::radio('JorP1', 'P',false,['class' => 'question'])}}状況を見ながら進める</label><br>

    <li>好きな生活のスタイルは…<br /></li>
    <label>{{Form::radio('JorP2', 'J',false,['class' => 'question'])}}想定内で規律的に過ごせること</label>
    <label>{{Form::radio('JorP2', 'P',false,['class' => 'question'])}}柔軟かつ臨機応変に過ごせること</label><br>

    <li>追い詰められると…<br /></li>
    <label>{{Form::radio('JorP3', 'J',false,['class' => 'question'])}}その状況が終わるまでずっと緊張している</label>
    <label>{{Form::radio('JorP3', 'P',false,['class' => 'question'])}}やる気が出て集中してできる</label><br>

    <li>結論は…<br /></li>
    <label>{{Form::radio('JorP4', 'J',false,['class' => 'question'])}}変えない、決めたら必ず実行する</label>
    <label>{{Form::radio('JorP4', 'P',false,['class' => 'question'])}}あくまで暫定、やるかやらないかはその時次第</label><br>

    <li>やりたいことは…<br /></li>
    <label>{{Form::radio('JorP5', 'J',false,['class' => 'question'])}}一つずつ集中してやる</label>
    <label>{{Form::radio('JorP5', 'P',false,['class' => 'question'])}}自分がやれるだけ一気にやる</label><br>


    </ol>
    <button>診断結果を見る</button>
    
    <input class=clear type=reset value="クリア">

    <!--<input type="button" id ="allCheck" value="このボタンを押すと全選択されます">-->

</div>

<p>参考資料:MBTIタイプ入門</p>



<style type="text/css">
label, input[type=“radio” ] {
    cursor: pointer;
}
</style>
</html>

@endsection

