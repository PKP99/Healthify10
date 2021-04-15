require('./bootstrap');

import Vue from 'vue';
import router from './index';
import App from './health/src/App';

import vueNotVisible from 'vue-not-visible'


/* const BREAKPOINTS = {
    mobile: 425,
    tablet: 768,
    tablet_landscape: 1024,
    desktop: 1200,
    desktop_large: 1440,
    hd: 1920,
}
*/
Vue.use(vueNotVisible); // this is default

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

// Import Bootstrap an BootstrapVue CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

// Make BootstrapVue available throughout your project
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)

const app = new Vue({
    el: '#app',
    components : {
        App
    },
    router
});