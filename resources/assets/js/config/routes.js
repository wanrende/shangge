/**
 * Created by tingping on 2017/6/9.
 */
import index from '../views/admin/index.vue'
import store from '../store/index.js'

export default [
    {
        path: '/admin/login',
        component: require('../views/admin/dashboard/login.vue'),
    },
    {
        path: '/admin',
        component: require('../views/admin/dashboard/dashboard.vue'),
    }
    
]