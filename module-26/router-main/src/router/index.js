import { createRouter, createWebHistory, createWebHashHistory } from "vue-router";

import HomeView from "@/views/HomeView.vue";
import AboutView from "@/views/AboutView.vue";
import ContactView from "@/views/ContactView.vue";
import BlogView from "@/views/BlogView.vue";
import PostView from "@/views/PostView.vue";
import LoginView from "@/views/LoginView.vue";
import TagsView from "@/views/TagsView.vue";

const routes = [
    {
        path:"/",
        name:"Home",
        component: HomeView
    },
    {
        path:'/about',
        name:'About',
        component: AboutView
    },
    {
        path:'/contact',
        name:'Contact',
        component: ContactView
    },
    {
        path:'/blog',
        name:'Blog',
        components:{
            default: BlogView,
            sidebar: TagsView
        }
    },
    {
        path:'/post/:id',
        name:'Post',
        component: PostView
    },
    {
        path:'/dashboard',
        name:'Dashboard',
        component: () => import('@/views/DashboardView.vue'),
        beforeEnter: (to, from) => {
            if(!localStorage.getItem('loggedin')){
                return '/login'
            }
        }
    },
    {
        path:'/login',
        name:'Login',
        component: LoginView
    }
]

const router = createRouter({
    routes,
    history: createWebHistory()
    // history: createWebHashHistory()
})

export default router;