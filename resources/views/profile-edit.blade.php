@extends('layouts.app') 
@section('content') 
<form action="{{ route('profile.update', $user->id)}}" method="post" enctype="multipart/form-data">{{ csrf_field() }} 
  <input type="hidden" name="_method" value="PUT">
  <input type="hidden" name="page" value="{{$page}}">
  <div class="form-contents">
    <div class="form-one-size">@if ($page == 'user_id') 
      <div class="form-input">
        <div class="form-label">User_id</div>
        <div>
          <input class="form-input__input" type="text" name="user_id" 　value="{{ old('user_id', $user['user_id']) }}">
        </div>
      </div>@endif @if ($page == 'user_name') 
      <div class="form-input">
        <div class="form-label">ユーザー名</div>
        <div>
          <input class="form-input__input" type="text" name="user_name" 　value="{{ old('user_name', $user['user_name']) }}">
        </div>
      </div>@endif @if ($page == 'email') 
      <div class="form-input">
        <div class="form-label">メールアドレス</div>
        <div>
          <input class="form-input__input" type="text" name="email" 　value="{{ old('email', $user['email']) }}">
        </div>
      </div>@endif @if ($page == 'password') 
      <div class="form-input">
        <div class="form-label">現在のパスワード</div>
        <div>
          <input class="form-input__input" type="password" 　name="old_password" value="">
        </div>
      </div>
      <div class="form-input">
        <div class="form-label">新パスワード</div>
        <div>
          <input class="form-input__input" type="password" name="password" 　value="">
        </div>
      </div>
      <div class="form-input">
        <div class="form-label">新パスワード(確認)</div>
        <div>
          <input class="form-input__input" type="password" 　name="password_confirmation" value="">
        </div>
      </div>@endif 
    </div>
  </div>
  <div class="form-foot">
    <input class="send" type="submit" value="編集">
  </div>
</form>@endsection