@extends('layouts.layouts')

{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '勤怠時間申請')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>勤怠時間申請</h2>
                <form action="{{ action('WorkerController@create3') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <label for="meeting-time">始業時間</label>
                        <input type="datetime-local" id="meeting-time" name="start" value="2018-06-12T19:30" min="2018-06-07T00:00" max="2022-06-14T00:00">
                    
                    <label for="meeting-time">終業時間</label>
                        <input type="datetime-local" id="meeting-time" name="end" value="2018-06-12T19:30" min="2018-06-07T00:00" max="2022-06-14T00:00">
                    
                    <label for="pet-select">申請内容</label>
                        <select name="dropdown" id="select"　name="type">
                            <option value="在宅">在宅勤務時間申請</option>
                            <option value="有給">有給休暇申請</option>
                            <option value="時間休">時間休申請</option>
                        </select>
                    
                    <label for="meeting-time">備考欄</label> 
                        <textarea class="form-control" name = "memo" rows="1"></textarea>
                    
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="申請">
                </form>
            </div>
        </div>
    </div>
@endsection