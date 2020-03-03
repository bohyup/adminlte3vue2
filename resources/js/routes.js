import VueRouter from 'vue-router';

import Dashboard from './views/dashboard'
import User from './views/user'
import Notice from './views/notice'

let routes = [
    {
        path: '/dashboard',
        component: Dashboard
    },
    {
        path: '/user',
        component: User
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
