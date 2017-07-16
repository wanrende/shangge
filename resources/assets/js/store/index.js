import Vue from 'vue'
import Vuex from 'vuex'
import create from './create'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        create
    }
})