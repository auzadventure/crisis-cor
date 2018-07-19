<template>


	
<div>
	


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
<h1>

</h1>


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
  
  },

  methods: {
	
	hello() {
	  console.log('hello')

	  axios.get("http://")
	  .then((res) => {
	  	console.log(res.data)
	  	}
	  )

	},

	getAll() {
		var self = this;
		
		axios.get('http://localhost:8080/api/contacts')
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
		axios.put("http://localhost:8080/api/contacts", {
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
		var path = "http://localhost:8080/api/contacts/"+ id;
		var self = this 
		// alert(path)
		axios.delete(path).then( res => {
						self.getAll();
						console.log(res) 
						}
					)
				   .catch( err => { console.log(err) } )		
	
	},
	
	createGroup() {
		alert(this.groupname);
		console.log(this.check)
	
		var self = this 
		axios.put("http://localhost:8080/api/groups", {
			name: self.groupname,
			members: self.check.toString()
		}). then ( res => {console.log(res)})
		 . catch (err => {console.log(err)})
	
	}
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
