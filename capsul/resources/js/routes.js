import VueRouter from 'vue-router';

import Home from './views/Home.vue';

import History from './views/History.vue';

import Community from './views/Community.vue';

import About from './views/About.vue';

import Map from './views/Map.vue';

import Photography from './views/Photography.vue';

import Signup from './views/Signup.vue';

import Login from './views/Login.vue';

import CreatePhoto from './views/CreatePhoto.vue';

import Dashboard from './views/Dashboard.vue';

import CapsulMap from './views/CapsulMap.vue';




let routes = [
    {
        path: '/',

        components: {
            header: Home,

        },
        children: [
            { path: '',
             components: {
                header: Home,
                helper: Photography
             }
            },
            { path: 'history',
             components: {
                header: Home,
                helper: History
             }
            },
            { path: 'community',
             components: {
                header: Home,
                helper: Community
             }
            },
        ]
    },
    {
        path: '/about',

        components: {
            header: About,
        }
    },
    {
        path: '/map',

        components: {
            header: Map,
        },
        meta: {
            requiresVisitor: true,
        }
    },
    {
        path: '/signup',

        components: {
            header: Signup,
        },
        meta: {
            requiresVisitor: true,
        }
    },
    {
        path: '/login',

        components: {
            header: Login,
        },
        meta: {
            requiresVisitor: true,
        }
    },
    {
        path: '/addphoto',

        components: {
            header: CreatePhoto,
        },
        meta: {
            requiresAuth: true,
        }
    },
    {
        path: '/dashboard',

        components: {
            header: Dashboard,
        },
        meta: {
            requiresAuth: true,
        }
    },
    {
        path: '/capsulmap',

        components: {
            header: CapsulMap,
        },
        meta: {
            requiresAuth: true,
        }
    },

];

export default new VueRouter({
    routes,

    linkActiveClass: 'is-active'
});
