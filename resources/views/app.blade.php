<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title
            inertia>{{ config('app.name', 'QFood.Site - Создаем професcиональные сайты для ресторанов, кафе и доставок еды') }}</title>

        <link rel="icon" href="https://qfood.site/img/logo.webp" type="image/x-icon">
        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead

        @php $url = explode('/', $page['component']) @endphp

        @if(count($url) > 0)
            @if($url[0] == 'Admin')
                <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet"/>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

                <link rel="stylesheet" href="https://unpkg.com/@vueup/vue-quill@1.2.0/dist/vue-quill.snow.prod.css">

            @endif
        @endif
    </head>
    <body>

    @if(count($url) > 0)
        @if($url[0] != 'Admin')
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
        @endif
    @endif
    <div class="follow-cursor"></div>
    @inertia
    </body>
</html>
