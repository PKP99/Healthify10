require('./bootstrap');

import Vue from 'vue';
import router from './index';
import App from './health/src/App';

import firebase from "firebase";
import store from "./health/src/store";

import vueNotVisible from 'vue-not-visible';

Vue.config.productionTip = false;



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

const firebaseConfig = {
    apiKey: "AIzaSyAbkrsmFF1Frwy_VWwg1I6BNEl5hHTko2g",
    authDomain: "healthify10.firebaseapp.com",
    databaseURL: "https://healthify10-default-rtdb.firebaseio.com",
    projectId: "healthify10",
    storageBucket: "healthify10.appspot.com",
    messagingSenderId: "983791010618",
    appId: "1:983791010618:web:0c3e9db536ac8b9f750603",
    measurementId: "G-G1QGK0SRW3"
  };
  
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  firebase.auth().onAuthStateChanged(user => {
    store.dispatch("fetchUser", user);
  });

  const app = new Vue({
    el: '#app',
    components : {
        App
    },
    router,
    store
});