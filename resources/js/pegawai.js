require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('pegawai-component', require('./components/pegawai.vue').default);

const app = new Vue({
    el: '#app',
    data: {
        baseurl: config.baseurl,
    }
});
