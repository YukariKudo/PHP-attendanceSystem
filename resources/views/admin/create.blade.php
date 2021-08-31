@extends('layouts.layouts')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '勤怠時間承認')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>勤怠時間承認画面</h2>
                @foreach($dayoffs as $dayoff)
                <form action="{{ action('Admin\AdminController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                    <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                    </ul>
                    @endif
                  <body>
                      <tr>
                        <a>内容：{{$dayoff->type}}</a><br>
                        <a>開始時間：{{$dayoff->start}}</a><br>
                        <a>終了時間：{{$dayoff->end}}</a><br>
                        <a>{{$dayoff->id}}</a>
                      </tr>
                      {{--{{dump($dayoff->id)}}//formについて調べ直す
                      //name属性について調べる
                      //3番しか送信されない--}}
                    <input type="hidden" name="id" value="{{ $dayoff->id }}">
                    <input type="submit" class="btn btn-primary" value="承認"><br>
                  </body>
                    {{ csrf_field() }}
                </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection