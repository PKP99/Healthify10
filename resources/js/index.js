import Vue from 'vue';
import VueRouter from 'vue-router';
import train from './health/src/components/training.vue';
import home from './health/src/components/home.vue';
import learn from './health/src/components/learning.vue';
import Aboutme from './health/src/components/Aboutme.vue';
import downloadapp1 from './health/src/components/downloadapp1.vue';
import Login from './health/src/components/Login.vue';
import SignUp from './health/src/components/SignUp.vue';
import ForgetPas from './health/src/components/ForgetPas.vue';
import UserDetails from './health/src/components/UserDetails';
import Details from './health/src/components/Details';
import Calorie from './health/src/components/Calorie';

Vue.use(VueRouter)


export default new VueRouter({
  routes: [
    {
      path: '/',
    name: 'Home',
    component: home
    },
    {
      path: '/Home',
    name: 'Home',
    component: home
    },
    {
      path: '/AboutMe',
    name: 'AboutMe',
    component: Aboutme
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
    },
    {
      path: '/Login',
    name: 'Login',
    component: Login
    },
    {
      path: '/SignUp',
    name: 'SignUp',
    component: SignUp
    },
    {
      path: '/AddDetails',
    name: 'AddDetails',
    component: UserDetails
    },
    {
      path: '/ResetPas',
    name: 'ForgetPas',
    component: ForgetPas
    },
    {
      path: '/Profile',
    name: 'Profile',
    component: Details
    },
    {
      path: '/Chart',
    name: 'Chart',
    component: Calorie
    }
  ],
  mode: "history"
})
