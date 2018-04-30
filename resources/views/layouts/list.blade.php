<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/laravel-blog/css/normalize.css">
    <link rel="stylesheet" href="/laravel-blog/css/app.css">
    <title>@yield('title', 'Home') - Feiffy's Blog</title>
</head>
<body>
    @include('layouts._header')

    <div class="content">
        <div class="container">
            <div class="col-group">
                <div class="col-8 main">
                    <div class="res-cons">
                        <article class="post">
                            <div class="post-content-pages">
                                <div>
                                    @yield('content')
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts._footer')
</body>
</html>