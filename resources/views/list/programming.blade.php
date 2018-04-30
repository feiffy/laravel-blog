@extends('layouts.list')

@section('content')
    @foreach($years as $year)
        <div class='al_year'>{{$year}}</div>
        <ul class='al_mon_list'>
            @foreach($posts as $y => $y_posts)
                @foreach($y_posts as $m => $d_posts)
                    @foreach($d_posts as $d => $post)
                        <li><span class="al_mon_list_date">{{$m}}/{{$d}}</span><a class="ctrl-list" href="/laravel-blog/{{$post->category}}/{{$post->plug}}">{{$post->title}}</a></li>
                    @endforeach
                @endforeach
            @endforeach
        </ul>
    @endforeach
@stop