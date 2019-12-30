import Vue from 'vue'
import Router from 'vue-router'
import Dashboard from '@/components/Dashboard'
import GameOverview from '@/components/GameOverview'
import GameDetail from '@/components/GameDetail'
import AdSetup from '@/components/AdSetup'
import SetupGuide from '@/components/SetupGuide'
import SetupGuides from '@/components/SetupGuides'
import Profile from '@/components/Profile'
import Touchportal from '@/components/Touchportal'
import Obs from '@/components/Obs'
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
      path: '/games',
      name: 'GameOverview',
      component: GameOverview
    },
    {
      path: '/profile',
      name: 'Profile',
      component: Profile
    },
    {
      path: '/games/:id',
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
    {
      path: '/setup-guides',
      name: 'SetupGuides',
      component: SetupGuides
    },
    {
      path: '/touchportal',
      name: 'Touchportal',
      component: Touchportal
    },
    {
      path: '/obs',
      name: 'Obs',
      component: Obs
    }
  ]
})
