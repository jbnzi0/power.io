import Vue from 'vue'
import VueRouter from 'vue-router'
import Dashboard from '../components/Dashboard.vue'
import Profile from '../components/Profile.vue'
import Users from '../components/Users.vue'
/*
import Awards from '../views/Awards.vue'
import Publications from '../views/Publications.vue'
import Researchers from '../views/Researchers.vue'*/
Vue.use(VueRouter)

const routes = [
  {
    path: '/dashboard',
    name: 'Dashboard',
    component: Dashboard
  },
  {
    path: '/profile',
    name: 'Profile',
    component: Profile
  },
  {
    path: '/users',
    name: 'Users',
    component: Users
  }

]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router
