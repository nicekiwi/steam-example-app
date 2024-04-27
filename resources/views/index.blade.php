@extends('layouts.app')

@section('content')
    <h1>Steam API example</h1>

    @if(!empty($appId) && empty($data))
        <p>No data found for appId "<b>{{$appId}}</b>"</p>
    @endif

    @if(!empty($appId) && !empty($data))
        <img src="{{$data->header}}" alt="{{$data->name}}">
        <h2>{{$data->name}}</h2>
    @endif

    <form method="get" action="/">
        @csrf
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="appId">Game AppID</label>
                    <input type="text" class="form-control" id="appId" name="appId" value="{{$appId ?? ''}}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
            </div>
        </div>
    </form>
@endsection
