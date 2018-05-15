@extends('layouts.admin')

@section('content')
@foreach($posts as $post)
    <div class="post-item">
        <div class="post-item-title">{{$post->name}}</div>
    </div>
@endforeach
@stop

