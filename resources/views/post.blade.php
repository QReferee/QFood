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
<style>

.header {
    display: flex;
    justify-content: space-between;
    flex-direction: row;
    position: unset;
    margin: 25px 0 0;
}

.cover {
    width: 100%;
    height: auto;
    display: block;
    max-height: 250px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 25px;
    height: auto;
    padding: 0;
}
.header__title{
    font-size: larger;
}

main {
    gap: 30px;
}

.post_el{
    background: white;
    margin: 10px auto;
    padding: 20px;
    border: 1px solid #c6c6c6;
    border-radius: 25px;
    gap:30px;
        display: flex;
    flex-direction: column;
    }

</style>
<body>
    @foreach($news as $post)


    <main>
        <header class="header" >
            <img src="/img/logo.webp" alt="Логотип" class="logo" style="background:white">
          <a href="/news">все статьи</a>
        </header>

        <div class='post_el'>
                <section class="cover">

              <img src="{{ $post->image }}" alt="Обложка статьи">
            </section>
            <h1 class="header__title">{{ $post->name }}</h1>

            <article class="article">
              <p> {!! $post->description !!}</p>
            </article>
        </div>
    </main>
    @endforeach
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
