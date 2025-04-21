import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import LoginView from "@/views/Auth/LoginView.vue";
import RegisterView from "@/views/Auth/RegisterView.vue";
import CreatePostView from "@/views/CreatePostView.vue";
import ProfileView from "@/views/ProfileView.vue";
import PublicProfileView from "@/views/PublicProfileView.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/logins',
      name: 'login',
      component: LoginView
    },
    {
      path: '/register',
      name: 'register',
      component: RegisterView
    },

    {
      path: '/create/post',
      name: 'post',
      component: CreatePostView
    },
    {
      path: '/my/profile/:id',
      name: 'user.profile',
      component: ProfileView,
      props: true
    },
    {
      path: '/public/profile/:id',
      name: 'pub.profile',
      component: PublicProfileView,
      props: true
    },
  ]
})

export default router
