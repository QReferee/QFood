<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title inertia>{{ config('app.name', 'QFood.Site - Создаем професcиональные сайты для ресторанов, кафе и доставок еды') }}</title>

    <link rel="icon" href="https://qfood.site/img/logo.webp" type="image/x-icon">
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>
    {{ $news }}
<script>
    window.replainSettings = {id: '69a92d71-5e1a-4fd2-a697-50da9e813eee'};
    (function (u) {
        var s = document.createElement('script');
        s.async = true;
        s.src = u;
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })('https://widget.replain.cc/dist/client.js');
</script>
</body>
</html>
