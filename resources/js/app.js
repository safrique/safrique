/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap'
import Vue from 'vue'
// import routes from './routes'
import VueRouter from 'vue-router'

window.Vue = Vue

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

import ExampleComponent from './components/ExampleComponent.vue'
Vue.component('example-component', ExampleComponent)

import Test from './components/ExampleComponent'
const routes = [
    {
        path: `/test/vue`,
        name: 'test',
        component: Test,
    },
]

/**
 * Vue Router
 */
Vue.use(VueRouter)

/**
 *
 * @type {VueRouter}
 */
let router = new VueRouter({
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
//
// const categories = new Vue({
//     el: '#categories',
//     router,
//
//     data: {
//         message: 'Hello Categories Vue!'
//     }
// })

const test = new Vue({
    el: '#test',
    router,

    data: {
        message: 'Hello TEST Vue!'
    }
})
