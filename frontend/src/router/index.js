import Vue from 'vue'
import Router from 'vue-router'
import Dashboard from '@/components/Dashboard'
import GameDetail from '@/components/GameDetail'
import AdSetup from '@/components/AdSetup'
import SetupGuide from '@/components/SetupGuide'
import Profile from '@/components/Profile'
import Login from '@/components/Login'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Login',
      component: Login
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
      path: '/game/:id',
      name: 'GameDetail',
      component: GameDetail
    },
    {
      path: '/ad-setup',
      name: 'AdSetup',
      component: AdSetup
    },
    {
      path: '/setup-guide',
      name: 'SetupGuide',
      component: SetupGuide
    },
  ]
})
