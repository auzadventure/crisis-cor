<template>

<div class="">
<section>
  <span>Group Name {{ $route.params.id }}</span>
  
  <div class='heading1'>
	   Members
  </div>
  <ul class="table-view group-view">
    <li class="table-view-cell" v-for="(item,index) in members">
		<div class=""><span class="icon icon-person"></span></div>
		<div class="" style='width:40%'>{{item.name}}</div>
		<div class="small color-grey" style='width:40%'>{{item.number}}</div>
		<button @click='delMember(item)' class='btn btn-negative btn-outlined'> Del</button>
		
	</li>
  </ul>	
	
</section>

<div style='height:30px'></div>

<section>
  <div class='heading1'>
	   Non Members 
  </div>

  <ul class="table-view group-view">
    <li class="table-view-cell" v-for="(item,index) in non_members">
		<div class=""><span class="icon icon-person"></span></div>
		<div class="" style='width:40%'>{{item.name}}</div>
		<div class="small color-grey" style='width:40%'>{{item.number}}</div>
		<button @click='addMember(item)' class='btn'> Add</button>
	</li>
  </ul>	

</section>



<section>
  <router-link :to="'/groups/add/' + $route.params.id" 
				class="btn btn-negative btn-outlined btn-block button-std">
		Add Members To Group
  </router-link>	
</section> 
 
</div>


</template>

<script>
// @ is an alias to /src
import axios from 'axios';

import * as GLOBALVARS from './../../globalvars'

var url = GLOBALVARS.API_URL + "/group-members"

export default {
  name: 'groups',
  data() {
	return {
		members: [],
		non_members: [],
	}
  },
  
  mounted() {
	this.getAllMembers()
	this.getAllNonMembers();

  },
  
  methods: {
	getAllMembers() {
		var self = this;
		
		var this_url = url + '/bygroup/' + this.$route.params.id
		
		axios.get(this_url)
			.then( res => {
						this.members = res.data
						console.log(res.data);
					})
			.catch( err => console.log(err))
	},
	
	getAllNonMembers() {
		var self = this;
		
		var this_url = url + '/notingroup/' + this.$route.params.id
		
		axios.get(this_url)
			.then( res => {
						this.non_members = res.data
						console.log(res.data);
					})
			.catch( err => console.log(err))
	},	
	
	addMember(contact) {
		var self = this;
		
		var this_url = url
		var params =  {
						"contactID": contact.contactID,
						"groupID": this.$route.params.id 
					  };
		
		axios.post(this_url,params)
			.then( res => {
						self.getAllMembers()
						self.getAllNonMembers();				
					})
			.catch( err => console.log(err))		
		
		console.log(params)
	
	},
	
	delMember(contact) {
		var this_url = url + "/" + contact.id

		var self = this;
		axios.delete(this_url)
			.then( res => {
						self.getAllMembers()
						self.getAllNonMembers();				
					})
			.catch( err => console.log(err))		
		
	}
  }
  
  

}
</script>