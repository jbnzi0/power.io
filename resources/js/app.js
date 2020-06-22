import Dashboard from './pages/Dashboard.vue'
import Profile from './pages/Profile.vue'
import Users from './pages/Users.vue'
import Index from './pages/Index.vue'
import About from './pages/About.vue'
import Login from './pages/Login.vue'
import Footer from './layout/Footer.vue'
import Navbar from './layout/Navbar.vue'


import VueRouter from 'vue-router'
import NowUiKit from './plugins/now-ui-kit'
import { Form, HasError, AlertError } from 'vform'

console.log(Navbar);

window.Vue = require('vue')
window.Form = Form
window.Fire = new Vue()
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
Vue.use(NowUiKit)
Vue.use(VueRouter)

const routes = [
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

]

const router = new VueRouter({
    linkExactActiveClass: 'active',
    mode: 'history',
    routes,
    scrollBehavior: to => {
      if (to.hash) {
        return { selector: to.hash }
      } else {
        return { x: 0, y: 0 }
      }
    }
})


const app = new Vue({
    el: '#app',
    router,
    render: h=> h(Index)
})
