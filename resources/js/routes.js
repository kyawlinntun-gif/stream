import VueRouter from 'vue-router'

let routes = [
    {
        path: '/',
        component: require('./views/HomeComponent').default
    },
    {
        path: '/about',
        component: require('./views/AboutComponent').default
    },
    {
        path: '/contact',
        component: require('./views/ContactComponent').default
    }
];

export default new VueRouter({
    mode: 'history',
    routes,
    linkActiveClass: 'is-active'
});