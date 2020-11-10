import VueRouter from 'vue-router'

let routes = [
    {
        path: '/',
        component: require('./components/HomeComponent').default
    },
    {
        path: '/about',
        component: require('./components/AboutComponent').default
    }
];

export default new VueRouter({
    routes
});