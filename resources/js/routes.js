import VueRouter from 'vue-router';
import ComponentHome from './views/Home.vue'
import ComponentAbout from './views/About.vue'

let routes = [
    {
        path: '/',
        component: ComponentHome,
    },
    {
        path: '/about',
        component: ComponentAbout,
    }
];

export default new VueRouter({
    routes
});
