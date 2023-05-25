<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <title>@yield('title')</title>
</head>
<body>
    @include('layout.header')
    <div class="flex">
        @yield('content')
        @include('layout.side')
    </div>
    @include('layout.footer')
</body>
</html>
