<template>
    <div v-if="$apollo.loading">Loading...</div>
    <div v-else class="container mx-auto px-4">
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Post List</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">Here you can check the latest posts.</p>
                </div>
                <div>
                    <PostCard :posts="posts"></PostCard>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import PostCard from './PostCard.vue';
import gql from 'graphql-tag'
export default {
    data() {
        return {
            posts: []
        }
    },
    apollo: {
        posts: {
            query: gql`
            query {
                posts {
                    id
                    title
                    content
                    user {
                        name
                    }
                    updated_at
                    topic {
                        name
                    }
                }
            }
        `,
            update: data => data.posts
        }
    },
    components: {
        PostCard
    }

};
</script>
