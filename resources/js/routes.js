import VueRouter from 'vue-router';

import Dashboard from './views/dashboard'
import Admin from './views/admin'
import Notice from './views/notice'

let routes = [
    {
        path:'',
        component: Dashboard
    },
    {
        path: '/dashboard',
        component: Dashboard
    },
    {
        path: '/admin',
        component: Admin
    },
    {
        path: '/notice',
        component: Notice
    }
];


export default new VueRouter({
    mode: 'history',
    routes,
    linkActiveClass: 'active'
});
