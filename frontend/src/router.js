import Vue from 'vue'
import Router from 'vue-router'

import Home from './views/Home.vue'
import Groups from './views/Groups.vue'
import Msg from './views/Msg.vue'
import Reply from './views/Reply.vue'
import Contacts from './views/Contacts.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/groups',
      name: 'Groups',
      component: Groups
    },
    {
      path: '/msg',
      name: 'msg',
      component: Msg
    },


    {
      path: '/reply',
      name: 'reply',
      component: Reply
    },

    {
      path: '/contacts',
      name: 'contacts',
      component: Contacts
    }   
  ]
})
