@extends('layouts.app')

<style>
  th {
    background-color: #289ADC;
    color: white;
    padding: 5px 40px;
  }
  tr:nth-child(odd) td{
    background-color: #FFFFFF;
  }
  td {
    padding: 25px 40px;
    background-color: #EEEEEE;
    text-align: center;
  }
  button {
    padding: 10px 20px;
    background-color: #289ADC;
    border: none;
    color: white;
  }
</style>

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div>
    プロフィール編集画面
</div>
<form action="/mypage/profile" method="post">
  <table>
  @csrf
     <h2>郵便番号</h2>
      <input type="text" name="postcode">
    
    
      <h2>住所</h2>
      <input type="text" name="address">
    
      <h2>建物</h2>
      <input type="text" name="buildingaddress">
    
      <br>
      <button>登録する</button>
      <br>
      <a href="/login">ログインはこちら</a>
      <br>
    // セッション未実装につき機能してない
</form>

@endsection