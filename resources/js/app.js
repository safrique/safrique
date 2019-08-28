import './bootstrap'
import Vue from 'vue'
import routes from './routes'
import VueRouter from 'vue-router'

import Navbar from './components/categories/Navbar'
Vue.component('Navbar', Navbar)

window.Vue = Vue

/**
 * Vue Router
 */
Vue.use(VueRouter)

/**
 *
 * @type {VueRouter}
 */
const router = new VueRouter({
    routes,
    mode: 'history',
})

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const main = new Vue({
//     el: '#main',
//     router,
//
//     data: {
//         message: 'Hello main Vue!'
//     }
// })

const categories = new Vue({
    el: '#categories',
    router,
}).$mount('#categories')

// const app = new Vue({
//     router
// }).$mount('#app')

// const test = new Vue({
//     el: '#test',
//     router,
//
//     data: {
//         message: 'Hello TEST Vue!'
//     }
// })
