@extends('layouts.layouts')
@section('title', '管理者用管理画面')

@section('content')
<div class="container">
  <div class="row">
    <h1>管理者用管理画面</h1>
    <h1>{{$hoge}}</h1>
<table class="table">
  <thead>
    <tr>
      <th>user_id</th>
      <th>Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
        <th scope="row">{{$user->user_id}}</th>
        <td>{{$user->name}}</td>
      </tr>
      <div class="col-4">
    <a class="btn btn-primary" href="{{ 'admin/create' }}" role="button">申請内容確認</a>
    </div>
    @endforeach
  </tbody>
</table>

  </div>
</div>
@endsection