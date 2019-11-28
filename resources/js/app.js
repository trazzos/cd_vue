require('./bootstrap');

import Vue from 'vue'
import vuetify from "root/plugins/vuetify";

import App from 'root/components/App'
import router from "root/plugins/router";

const app = new Vue({
    el: '#app',
    router,
    vuetify,
    render: h => h(App),
})

export default app;
