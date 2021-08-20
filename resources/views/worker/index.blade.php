@extends('layouts.layouts')
@section('title', '社員用管理画面')

@section('content')
<div class="container">
  <div class="row">
    <h1>社員用管理画面</h1>
    {{ Auth::user()->user_id }}
    {{ Auth::user()->name }}
    
    <div class="col-4">
    <a class="btn btn-primary" href="{{ 'worker/create' }}" role="button">在宅勤怠入力</a>
    </div>
    <div class="col-4">
    <a class="btn btn-primary" href="{{'worker/create2'}}" role="button">有給休暇申請</a>
    </div>
    <div class="col-4">
    <a class="btn btn-primary" href="{{'worker/create3'}}" role="button">代休申請</a>
    </div>
  </div>
</div>
@endsection