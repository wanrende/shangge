/**
 * Created by tingping on 2017/6/9.
 */





require('./bootstrap');


import VueRouter from 'vue-router'


import App from './views/admin/index.vue'
import store from './admin/store/index.js'
import iView from 'iview'
import 'iview/dist/styles/iview.css'
import routes from './config/routes.js'

Vue.use(VueRouter)
Vue.use(iView)


const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    linkActiveClass: 'active',
    routes: routes
})

new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
})

// new Vue(Vue.util.extend({ store, router }, App)).$mount('#app')




