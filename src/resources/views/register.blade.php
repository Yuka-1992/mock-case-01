@extends('layouts.app')



@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')

<h1>
    登録画面
</h1>
<form action="/register" method="post">
  
  @csrf
    
      <h2>ユーザー名</h2>
      <input type="text" name="name">
    
    
      <h2>メールアドレス</h2>
      <input type="text" name="maill">
    
      <h2>パスワード</h2>
      <input type="text" name="password">
    
      <br>
      <button>登録する</button>
      <br>
      <a href="/login">ログインはこちら</a>
    
  
</form>

@endsection