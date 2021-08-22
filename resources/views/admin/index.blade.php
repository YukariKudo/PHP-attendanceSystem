@extends('layouts.layouts')
@section('title', '管理者用管理画面')

@section('content')
<div class="container">
  <div class="row">
    <h1>管理者用管理画面</h1>
    {{ Auth::user()->user_id }}
    {{ Auth::user()->name }}
    
    <div class="col-4">
    <a class="btn btn-primary" href="{{ 'admin/create' }}" role="button">在宅勤怠申請確認</a>
    </div>
    <div class="col-4">
    <a class="btn btn-primary" href="{{'admin/create2'}}" role="button">有給休暇申請確認</a>
    </div>
    <div class="col-4">
    <a class="btn btn-primary" href="{{'admin/create3'}}" role="button">代休申請確認</a>
    </div>
  </div>
</div>
@endsection