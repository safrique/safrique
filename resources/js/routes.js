import Categories from './components/categories/Categories'
import Test from './components/ExampleComponent'

const routes = [
    {
        path: `/categories/main`,
        name: 'categories',
        component: Categories,
    },

    {
        path: `/test/vue`,
        name: 'test',
        component: Test,
    },
]

export default routes
