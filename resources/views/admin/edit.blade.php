@extends('layouts.admin')

@section('content')
    <form class="content-container" action="/laravel-blog/admin/save" method="POST">
        <div class="post-title"><input type="text" title="post-title" placeholder="此处输入标题" name="title"/></div>
        <div class="post-meta">Post at <?php echo date('Y-m-d H:i:s');?></div>
        <div class="post-content">
            <textarea title="post-content" id="editor" placeholder="此处输入内容" name="content"></textarea>
        </div>
        <div><button class="savePost">保存</button></div>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    </form>
@stop

