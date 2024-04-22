<script setup>
    import {Head, Link, router, useForm} from '@inertiajs/vue3';

    defineProps({
        post: {
            type: Object
        }
    })
</script>

<template>
    <main>
        <header class="header" >
            <img src="/img/logo.webp" alt="Логотип" class="logo" style="background:white">
            <Link href="/news">все статьи</Link>
        </header>

        <div class='post_el'>
            <section class="cover">
                <img :src="post.image" alt="Обложка статьи">
            </section>
            <h1 class="header__title" v-html="post.summary"></h1>

            <article class="article">
                <p v-html="post.description"></p>
            </article>
        </div>
    </main>
</template>

<style scoped>
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
