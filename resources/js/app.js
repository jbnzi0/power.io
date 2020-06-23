import Dashboard from './pages/Dashboard.vue'
import Users from './pages/crud/Users.vue'
import Publications from './pages/crud/Publications.vue'
import Awards from './pages/crud/Awards.vue'
import VueRouter from 'vue-router'
import { Form, HasError, AlertError } from 'vform'
import Swal from 'sweetalert2'
require('./bootstrap')
window.axios = require('axios');
window.Vue = require('vue')

Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

Vue.use(VueRouter)

const routes = [

  { path: '/dashboard', name: 'Dashboard', component: Dashboard },
  { path: '/users', name: 'Users', component: Users },
  { path: '/awards', name: 'Awards', component: Awards },
  { path: '/publications', name: 'Publications', component: Publications }

]

const router = new VueRouter({
    mode: 'history',
    routes,
})

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})



window.Form = Form
window.Fire = new Vue()
window.Swal = Swal
window.Toast = Toast

const app = new Vue({
    el: '#app',
    router,

})
