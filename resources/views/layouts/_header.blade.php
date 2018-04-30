<header class="header clearfix">
    <div class="container">
        <div class="col-group">
            <div class="site-name">
                <a class="logo" href="{{route('index')}}">Feiffy's blog</a>
                <p class="description">诗歌、植物与编程</p>
            </div>
            <div>
                <nav class="nav-menu clearfix">
                    <a href="{{route('programming')}}"
                       @if(isset($category)&&$category=='programming') class="current" @endif>编程</a>
                    <a href="{{route('plant')}}" @if(isset($category)&&$category=='plant') class="current" @endif>植物</a>
                    <a href="{{route('poem')}}" @if(isset($category)&&$category=='poem') class="current" @endif>诗歌</a>
                </nav>
            </div>
        </div>
    </div>
</header>