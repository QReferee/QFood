<script setup>
import {Head, Link, router, useForm} from '@inertiajs/vue3';

defineProps({
    news: {
        type: Object,
    },
});
</script>

<template>
    <div class="container mx-auto">
        <div class="p-4">
            <Link :href="route('admin.news.create')"
                    class="text-white mb-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Создать новости
            </Link>

            <div class="card" v-for="post in news">
                <div>
                    <p class="text-xl">{{ post.name }}</p>
                    <p class="text-gray-400 text-sm">{{ post.summary }}</p>
                </div>

                <Link :href="route('admin.news.delete', [post.id])" class="ml-auto icon-trush transition-all cursor-pointer">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7l16 0" /><path d="M10 11l0 6" /><path d="M14 11l0 6" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg>
                </Link>
            </div>
        </div>
    </div>

</template>

<style scoped>
    .card {
        padding: 15px;
        border: 1px solid #c9c9c9;
        border-radius: 10px;
        font-size: 20px;
        margin-top: 15px;
        display: flex;
        align-items: center;
    }

    .card .icon-trush:hover {
        color: red;
    }
</style>
