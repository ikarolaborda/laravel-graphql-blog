<template>
    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        <article class="flex max-w-xl flex-col items-start justify-between" v-for="post of posts" :key="post.id">
            <div class="flex items-center gap-x-4 text-xs">
                <time class="text-gray-500">{{ formatDate(post.updated_at) }}</time>
                <a href="#"
                   class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">{{ post.topic.name }}</a>
            </div>
            <div class="group relative">
                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600 hover:underline">
                    <router-link :to="{name: 'post', params: {id: post.id}}">
                        <span class="absolute inset-0"></span>
                        {{ post.title }}
                    </router-link>
                </h3>
                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">{{ post.content }}</p>
            </div>
            <div class="relative mt-8 flex items-center gap-x-4">
                <div class="text-sm leading-6">
                    <p class="font-semibold text-gray-900">
                        <a href="#">
                            <span class="absolute inset-0"></span>
                            {{ post.user.name }}
                        </a>
                    </p>
                    <p class="text-gray-600">-</p>
                </div>
            </div>
        </article>
    </div>


</template>
<script>
    export default {
        props: {
            posts: {
                type: Array,
                required: true
            }
        },
        methods: {
            formatDate(dateString) {
                const options = { year: 'numeric', month: '2-digit', day: '2-digit', hour: '2-digit', minute: '2-digit' };
                const date = new Date(dateString);
                return new Intl.DateTimeFormat('default', options).format(date);
            }
        }
    }
</script>
