import { createRouter, createWebHistory } from 'vue-router';

// import NotFound from './pages/NotFound.vue';

const router = createRouter({
    history: createWebHistory(),
    routes: [

        {
            path: '/',
            name: 'landingpage',
            component: () => import('./pages/LandingPage.vue')
        },

        {
            path: '/homeProject',
            name: 'home',
            component: () => import('./pages/HomeProject.vue')
        },

        {
            path: '/about',
            name: 'about',
            component: () => import('./pages/About.vue')
        },

        {
            path: '/projects/:id',
            name: 'project-show',
            component: () => import('./pages/ShowProject.vue')
        }

        // MATCH EVERYTHING ELSE
        // {
        //     path: '/:pathMatch(.*)*',
        //     name: 'NotFound',
        //     component: NotFound
        // },
    ]
});

export { router };
