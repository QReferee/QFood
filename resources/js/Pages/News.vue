<script setup>
import {Head, Link, router, useForm} from '@inertiajs/vue3';

defineProps({
    news: {
        type: Object,
    }
})
</script>

<template>
    <main>
        <div class="header">
            <img src="img/logo.webp" alt="Логотип" class="logo">
            <Link href="/">Главная</Link>
        </div>

        <div class="post-grid">
            <!-- Посты -->
            <Link class="post" v-for="post in news" :href="route('page', [post.id])">
                <h2>{{ post.name }}</h2>
                <p v-html="post.summary"></p>
            </Link>
            <!-- Ещё посты -->
        </div>
    </main>
</template>

<style scoped>
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
