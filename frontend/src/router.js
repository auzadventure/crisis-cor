import Vue from 'vue'
import Router from 'vue-router'

import Home from './views/Home.vue'
import Groups from './views/Groups.vue'
import GroupsCreate from './views/groups/create.vue'
import GroupsView from './views/groups/view.vue'
import GroupsAdd from './views/groups/add.vue'

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
	  path: '/groups/create',
	  name: 'GroupsCreate',
	  component: GroupsCreate
	},
	
	{
	  path: '/groups/:id',
	  name: 'Groupsview',
	  component: GroupsView
	},

	{
	  path: '/groups/add/:id',
	  name: 'GroupsAdd',
	  component: GroupsAdd
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
    },
	
    {
      path: '/contacts/groupid/:groupid',
      name: 'contactsgroups',
      component: Contacts
    }   
  ]
})
