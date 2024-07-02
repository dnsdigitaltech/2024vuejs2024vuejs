import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/components/Home'
import About from '@/components/About'
import Contact from '@/components/Contact'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/sobre',
      name: 'About',
      component: About
    },
    {
      path: '/contato',
      name: 'Contact',
      component: Contact
    }
  ]
})
