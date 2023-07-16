import './bootstrap';
import Vue, {createApp, onMounted} from "vue";
import VueRouter from "vue-router";
import {ApolloClient, InMemoryCache} from "apollo-boost";
import { createHttpLink } from 'apollo-link-http'
import VueApollo from "vue-apollo";

import ExampleComponent from "./components/ExampleComponent";
import PostComponent from "./components/posts/postIndex";

window.Vue = Vue;
Vue.use(VueRouter);
Vue.use(VueApollo);

const routes = [
    {
        path: '/',
        name: 'home',
        component: ExampleComponent
    },
    {
        path: '/post/:id',
        name: 'post',
        component: PostComponent
    }
];

const router = new VueRouter({
    mode: 'history',
    routes
});

const apolloClient = new ApolloClient({
    uri: 'http://localhost/graphql',
    cache: new InMemoryCache(),
    link: createHttpLink({
        uri: 'http://localhost/graphql',
    })
});

const apolloProvider = new VueApollo({
   defaultClient: apolloClient
});



const app = new Vue({
    router,
    apolloProvider,
}).$mount('#app');
