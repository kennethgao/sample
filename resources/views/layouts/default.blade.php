<html>
<head>
    <meta charset="utf-8" />
    <title>@yield('title', '标题')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts/_header')

    <div class="container">
      <div class="col-md-offset-1 col-md-10">
        @yield('content')
        @include('layouts/_footer')
      </div>
    </div>  
</body>
</html>