import Vue from 'vue'
import VueRouter from 'vue-router'

import Hello from 'root/components/Hello'
import Home from 'root/components/Home'

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

export default router;
