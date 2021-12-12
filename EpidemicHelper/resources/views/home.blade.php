<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.default')

<!-- 傳送資料到母模板，並指定變數為title -->

<!-- 傳送資料到母模板，並指定變數為content -->
@section('content')
<h1>總共有幾天：{{$days}}</h1>
<h1>中華航空 共有哪些班次{{$airplanes}}</h1>
@endsection

