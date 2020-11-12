
@extends('layouts.app')

@section('content')

<div>
<h1>診断結果画面</h1>

<h2>{{Auth::user()->user_name}}さんの性格タイプは{{ $type }}です</h2>

<!--検索させる-->
<div class="gsearch">
<p>Let's Search!</p><br />
  <script>
  (function() {
    var cx = '++++++++++++++++++++:++++++++++';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//www.google.com/cse/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
  <script>
<gcse:searchbox-only></gcse:searchbox-only>
 </div>

</div>




@endsection

