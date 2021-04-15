import Vue from 'vue';
import VueRouter from 'vue-router';
import train from './health/src/components/training.vue';
import home from './health/src/components/home.vue';
import learn from './health/src/components/learning.vue';
import events from './health/src/components/events.vue';
import downloadapp1 from './health/src/components/downloadapp1.vue';

Vue.use(VueRouter)


export default new VueRouter({
  routes: [
    {
      path: '/Home',
    name: 'Home',
    component: home
    },
    {
      path: '/Events',
    name: 'Events',
    component: events
    },
    {
      path: '/Learn',
    name: 'Learn',
    component: learn
    },
    {
      path: '/Train',
    name: 'Train',
    component: train
    },
    {
      path: '/Download',
    name: 'Download',
    component: downloadapp1
    }
  ],
  mode: "history"
})
