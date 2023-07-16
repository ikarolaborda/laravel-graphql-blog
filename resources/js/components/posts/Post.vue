<template>
    <h1>
        This is the post with ID: {{ $route.params.id }}
    </h1>
</template>
<script>
    export default {
        data() {
            return {
                postId: ''
            }
        },
        props: {
            post: {
                type: Object,
                required: true
            }
        }
    }
</script>
