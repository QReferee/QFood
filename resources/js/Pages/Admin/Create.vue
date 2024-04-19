<script setup>

import {Link, useForm} from "@inertiajs/vue3";
import InputError from "@/Components/InputError.vue";
import {ref} from "vue";

let alertImage = ref()

let handleFileChange = (event) => {
    const file = (event.target.files) ? event.target.files : event.dataTransfer.files;
    const formData = new FormData();
    formData.append('file', file[0]);

    alertImage.value = 'Ожидайте загрузки изображения, как уведомление пропадет, то можете создавать пост'

    axios.post('/api/v1/upload', formData, {
        headers: {
            'Content-Type': 'multipart/form-data',
        },
    }).then(res => {
        form.image = res.data.file
        alertImage.value = ''
    }).catch(error => {
        form.errors.image = error.response.data.errors.file[0]
    })
}

const form = useForm({
    name: '',
    description: '',
    summary: '',
    image: '',
});

const submit = () => {
    form.post(route('admin.news.store'), {
        preserveState: true,
        onSuccess: () => {
            window.location.href = route('admin.news.index');
        },
    });
};
</script>

<template>
    <div class="container mx-auto">
        <div class="p-4">
            <Link :href="route('admin.news.index')"
                  class="text-white mb-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Назад
            </Link>

            <form @submit.prevent="submit" class="mt-4">
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Название
                        статьи (Заголовок)</label>
                    <input type="text" id="name" v-model="form.name"
                           class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                           placeholder="Название статьи (Заголовок)" required/>
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="mb-5">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Описание</label>
                    <textarea id="description" rows="5" v-model="form.description"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Описание" required></textarea>

                    <InputError class="mt-2" :message="form.errors.description" />
                </div>

                <div class="mb-5">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Краткое
                        содержание</label>
                    <textarea id="description" rows="5" v-model="form.summary"
                              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                              placeholder="Краткое содержание" required></textarea>
                    <InputError class="mt-2" :message="form.errors.summary" />
                </div>

                <div class="mb-5">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="small_size">Загрузите
                        картинку</label>
                    <input
                        class="block w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        type="file"
                        @input="handleFileChange"
                    >
                    <InputError class="mt-2" :message="form.errors.image" />

                    <div class="p-4 mb-4 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert">
                        <span class="font-medium">{{ alertImage }}</span>
                    </div>

                </div>

                <button :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Создать новость
                </button>
            </form>
        </div>
    </div>
</template>

<style scoped>

</style>
