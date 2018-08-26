<template>

<div>
	
  <div v-if="$route.params.groupid">
	<h3> Group Selected{{ $route.params.groupid }}</h3>
  </div>
	
	
	
  <ul class="table-view group-view">
    <li class="table-view-cell" v-for="(item,index) in contacts">
		<div class=""><span class="icon icon-person"></span></div>
		<div class="" style='width:40%'>{{item.name}}</div>
		<div class="small color-grey" style='width:40%'>{{item.number}}</div>
		<div class='pull-right'>
		
		<button class='btn' @click='deleterow(item.id)'> x </button>
		<input type='checkbox' class='checkbox' v-model="check" :value='index'></div>
		
	</li>
	
  </ul>
  
<section>
{{check}} {{isGroup}}






<form v-if="!isGroup">
  <input type="text" v-model='contact.name' placeholder="Name">	
  <input type="text" v-model='contact.tel' placeholder="Contact No">

  <button class="btn btn-negative btn-outlined btn-block button-std" @click='add' >Add Contact</button>	
  
  <button @click='getAll' class='btn btn-block'>Get All</button>
</form>



<form v-else>

  <input type="text" v-model='groupname' placeholder="Groupname">

  <button class="btn btn-negative btn-outlined btn-block button-std" @click='createGroup' >
  	<span class="icon icon-list"></span>  Create Group</button>


	
</form>	



</section>

</div>



</template>

<script>
// @ is an alias to /src
import axios from 'axios';

import * as GLOBALVARS from './../globalvars'

var url = GLOBALVARS.API_URL + "/contacts"


export default {
  name: 'reply',
  data() {
  	return {
  	  check: [],
      contact: {},
      contacts: [{name:'Andahara',tel:'94450338'},{name:'william', tel:'9444555'},{name:'lionel',tel:'555-5555'}],
	  groupname: ''
	}
  },
  
  mounted() {
	this.getAll()
	console.log(this.$route.params.groupid)
  },

  methods: {

	getAll() {
		var self = this;
		
		axios.get(url)
			.then( res => {
						this.contacts = res.data
						console.log(res.data);
					})
			.catch( err => console.log(err))
	},
	
	
	add(){
		console.log('add')
		let item = {name:this.contact.name, tel: this.contact.tel}
		var self = this; 
		axios.post(url, {
						"name": this.contact.name,
						"number": this.contact.tel,
						}
				  ).then( res => { 
					console.log(res)
					self.getAll();

				  })
				   .catch( err => { console.log(err) } )
				
	},
	
	deleterow(id) {
		var path = url + "/" + id;
		var self = this 
		// alert(path)
		axios.delete(path).then( res => {
						self.getAll();
						console.log(res) 
						}
					)
				   .catch( err => { console.log(err) } )		
	
	},
	
  },

  computed: {

  	isGroup() {
  		return this.check.length > 0
  	}
  }
}
</script>

<style scope>

.checkbox{
	padding:15px;
}

</style>
