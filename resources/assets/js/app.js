
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */



// Vue.component('index', require('./views/home/index/components/Index.vue'));
// var Example = Vue.component('index');

// const app = new Example().$mount('#app');

// import store from './store'


// const app = new Vue({
//     el: '#app'
// });
import VueAwesomeSwiper from 'vue-awesome-swiper'
Vue.use(VueAwesomeSwiper)

import ElementUI from 'element-ui'
Vue.use(ElementUI)

import store from './store'
import App from './views/home/index/Index.vue'

new Vue(Vue.util.extend({ store }, App)).$mount('#app')