<template>
    <div class="container mx-auto">
        <h1 class="text-indigo-700 uppercase">Post Lists</h1>
        <hr class="divider">
        <div>
            <PostIndex></PostIndex>
        </div>
    </div>

</template>
<script>
    import PostIndex from "./posts/postIndex.vue";
    export default {
        components: {
            PostIndex
        }
    };

</script>
