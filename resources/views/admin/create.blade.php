@extends('layouts.layouts')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '在宅勤怠時間承認')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>在宅勤怠時間承認画面</h2>
                <form action="{{ action('Admin\AdminController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                    <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                    </ul>
                    @endif
                  <body>
                    @foreach($dayoffs as $dayoff)
                      <tr>
                        <a>内容：{{$dayoff->type}}</a><br>
                        <a>開始時間：{{$dayoff->start}}</a><br>
                        <a>終了時間：{{$dayoff->end}}</a><br>
                      </tr>
                    <input type="hidden" name="id" value="{{ $dayoff->id }}">
                    <input type="submit" class="btn btn-primary" value="承認"><br>
                    @endforeach
                  </body>
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
@endsection