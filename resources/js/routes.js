import Categories from './components/categories/Categories'
import Basketball from './components/categories/basketball/Basketball'

const routes = [
    {
        path: `/categories`,
        name: 'categories',
        component: Categories,
        props: true,

        children: [
            {
                path: `basketball`,
                name: 'basketball',
                component: Basketball,
                props: true,
            },
        ]
    },
]

export default routes
