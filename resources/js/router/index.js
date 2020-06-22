import Vue from 'vue'
import VueRouter from 'vue-router'
import Dashboard from '../pages/Dashboard.vue'
import Profile from '../pages/Profile.vue'
import Users from '../pages/Users.vue'
import Index from '../pages/Index.vue';
import About from '../pages/About.vue';
import Login from '../pages/Login.vue';
import Navbar from '../layout/Navbar.vue';
import Footer from '../layout/Footer.vue';

/*
import Awards from '../views/Awards.vue'
import Publications from '../views/Publications.vue'
import Researchers from '../views/Researchers.vue'*/
Vue.use(VueRouter)


const router = new Router({
  linkExactActiveClass: 'active',
  routes: [
    {
      path: '/',
      name: 'index',
      components: { default: Index},

    },
    {
      path: '/about',
      name: 'about',
      components: { default: About, header: Navbar, footer: Footer },
      props: {
        header: { colorOnScroll: 400 },
        footer: { backgroundColor: 'black' }
      }
    },
    {
      path: '/login',
      name: 'login',
      components: { default: Login, header: Navbar },
      props: {
        header: { colorOnScroll: 400 }
      }
    },
    
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
  ],
  scrollBehavior: to => {
    if (to.hash) {
      return { selector: to.hash };
    } else {
      return { x: 0, y: 0 };
    }
  }
});

export default router
