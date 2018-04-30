@extends('layouts.content')

@section('extra-head')
@include('layouts._highlight')
@stop
@section('content')
    {!! $post->content !!}
@stop