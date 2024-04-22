<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title
        inertia>{{ config('app.name', 'QFood.Site - Создаем професcиональные сайты для ресторанов, кафе и доставок еды') }}</title>

    <link rel="icon" href="https://qfood.site/img/logo.webp" type="image/x-icon">
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .header {
        justify-content: space-between;
        margin-top: 30px;
        border: 1px solid #c9c9c9;
        padding: 20px;
        border-radius: 25px;
        display: flex;
        align-items: center;
        background: white;
    }

    .post-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1rem;
    }

    .post {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 100%;
        border: 1px solid #c9c9c9;
        padding: 30px;
        height: 400px;
        border-radius: 25px;
        background: url(img/grbg.webp);
        background-size: cover;
        background-color: #f8f8ff96;
    }

    main {
        width: 90%;
        margin: auto;
        display: flex;
        flex-direction: column;
        gap: 30px;
        z-index: 2;
        position: relative;
    }
</style>
<body>
<main>
    <!-- Заголовок -->
    <div class="header">
        <img src="../img/logo.webp" alt="Логотип" class="logo">
        <a href="/">Главная</a>
    </div>


    <!-- Грид постов -->
    <div class="post-grid">
        <!-- Посты -->
        @foreach($news as $post)
            <div class="post" onclick="location.href='/news/{{ $post->id }}';">

                <h2> {!! $post->name !!}</h2>
                <p>{!! $post->summary !!}</p>


            </div>
        @endforeach
        <!-- Ещё посты -->
    </div>
</main>


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
