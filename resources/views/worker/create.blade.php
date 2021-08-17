{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.layouts')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '在宅勤怠時間申請')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>在宅勤怠時間申請</h2>
            </div>
        </div>
    </div>
@endsection