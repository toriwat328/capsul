import VueRouter from 'vue-router';

import Home from './views/Home.vue';

import History from './views/History.vue';

import Community from './views/Community.vue';

import About from './views/About.vue';

import Map from './views/Map.vue';

import Photography from './views/Photography.vue';




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
        }
    },
];

export default new VueRouter({
    routes,

    linkActiveClass: 'is-active'
});
