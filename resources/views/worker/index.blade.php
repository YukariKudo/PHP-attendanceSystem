@extends('layouts.layouts')
@section('title', '社員用管理画面')

@section('content')
<div class="container">
  <div class="row">
    <h1>社員用管理画面</h1>
    {{ Auth::user()->user_id }}
    {{ Auth::user()->name }}
    
    @foreach(Auth::user()->dayoffs as $dayoff)
    @if($dayoff->is_checked == 1)
    承認済み
    @else
    未承認
    @endif
    @endforeach
    
    <div class="col-4">
    <a class="btn btn-primary" href="{{'worker/create3'}}" role="button">勤怠管理申請</a>
    </div>
  </div>
</div>
@endsection