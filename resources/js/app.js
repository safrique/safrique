import './bootstrap'
import Vue from 'vue'
import routes from './routes'
import VueRouter from 'vue-router'

import Navbar from './components/categories/Navbar'
import VueFooter from './components/categories/Footer'

window.Vue = Vue

Vue.use(VueRouter)

const router = new VueRouter({
    routes,
    mode: 'history',
})

new Vue({
    el: '#categories',
    router,

    components: { Navbar, VueFooter },
}).$mount('#categories')
