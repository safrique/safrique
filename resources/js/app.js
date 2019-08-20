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

// import ExampleComponent from './components/ExampleComponent'
// Vue.component('example-component', ExampleComponent)

// import Test from './components/ExampleComponent'
// const routes = [
//     {
//         path: `/test/vue`,
//         name: 'test',
//         component: ExampleComponent,
//     },
// ]

const Foo = { template: '<div>foo</div>' }
const Bar = { template: '<div>bar</div>' }

import Basketball from './components/categories/basketball/Basketball'

const routes = [
    { path: '/foo', component: Foo },
    { path: '/bar', component: Bar },

    {
        path: `/basketball`,
        // name: 'basketball',
        component: Basketball,
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

// const categories = new Vue({
//     el: '#categories',
//     router,
// }).$mount('#categories')

const app = new Vue({
    router
}).$mount('#app')

// const test = new Vue({
//     el: '#test',
//     router,
//
//     data: {
//         message: 'Hello TEST Vue!'
//     }
// })
