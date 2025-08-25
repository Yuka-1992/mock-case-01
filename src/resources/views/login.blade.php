@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div>
    ログイン画面
</div>

<p>セッションに保存した値:{{ $data }}</p>
<form action="/session" method="post">
  @csrf
  <input type="text" name="input">
  <button>送信</button>
</form>
<br>
//セッションテーブルの確認に使用
@endsection