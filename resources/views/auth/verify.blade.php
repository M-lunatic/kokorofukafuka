@extends('layouts.app')
@section('content')
@include('commons.errors')

<div class="card-header">メール認証</div>

<div class="card-body">
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
          メール認証リンクがあなたのメールアドレス宛に送信されました。
        </div>
    @endif

    メール認証リンクをクリックして認証を願いします。
    メールが来ていない場合は<a href="{{ route('verification.resend') }}">こちら</a>をクリックすることで再送信されます。
</div>

@endsection