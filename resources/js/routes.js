import Categories from './components/categories/Categories'
import Basketball from './components/categories/basketball/Basketball'

// import ExampleComponent from './components/ExampleComponent'

const routes = [
    // {
    //     path: `/test`,
    //     name: 'test',
    //     component: ExampleComponent,
    // },

    {
        path: `/categories`,
        name: 'categories',
        component: Categories,
    },

    {
        path: `/categories/basketball`,
        name: 'basketball',
        component: Basketball,
    },
]

export default routes
