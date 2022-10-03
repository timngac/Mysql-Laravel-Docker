<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('metas')
    <title>@yield('title', __('title.default_title'))</title>
    @include('layouts.defaults.styles')
    @stack('styles')
</head>
<body>
@include('layouts.defaults.navbar')
<section class="mt-3">
    @yield('content')
</section>
<footer class="text-bg-dark text-center p-2">
    @include('layouts.defaults.footer')
</footer>
@include('layouts.defaults.scripts')
@stack('scripts')
</body>
</html>
