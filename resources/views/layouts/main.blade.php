<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{route('post.index')}}">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('post.index')}}">Posts <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about.index')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact.index')}}">Contacts</a>
                    </li>
                    @can('view', auth()->user())
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.post.index')}}">Admin</a>
                    </li>
                    @endcan
                </ul>
            </div>
        </nav>
    </div>
    <div class="row">
        @yield('content')
    </div>
</div>

</body>
</html>
