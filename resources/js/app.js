require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'
import vuetify from "./plugins/vuetify";

import App from './components/App'
import Hello from './components/Hello'
import Home from './components/Home'

//TODO move to plugin
//TODO fix webpack
const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello,
        },
    ],
});

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router,
    vuetify,
    render: h => h(App),
})

export default app;
