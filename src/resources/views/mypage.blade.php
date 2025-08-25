@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('content')
//ボタンのテストに使用
<table>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>maill</th>
    <th>password</th>
    <th>postcode</th>
    <th>address</th>
    <th>buildingaddress</th>
    <th>created_at</th>
    <th>updated_at</th>
  </tr>
  @foreach ($users as $user)
  <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->maill}}</td>
    <td>{{$user->password}}</td>
    <td>{{$user->postcode}}</td>
    <td>{{$user->address}}<td>
    <td>{{$user->buildingaddress}}</td>
    <td>{{$user->created_at}}</td>
    <td>{{$user->updated_at}}</td>

  </tr>
  @endforeach
</table>
@endsection