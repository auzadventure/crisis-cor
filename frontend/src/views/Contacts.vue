<template>


	
<div>
	


  <ul class="table-view group-view">
    <li class="table-view-cell" v-for="(item,index) in contacts">
		<div class=""><span class="icon icon-person"></span></div>
		<div class="" style='width:40%'>{{item.name}}</div>
		<div class="small color-grey" style='width:40%'>{{item.tel}}</div>
		<div class='pull-right'><input type='checkbox' v-model="check" :value='index'></div>
		
	</li>
	
  </ul>
  
<section>
{{check}} {{isGroup}}



<form v-if="!isGroup">
  <input type="text" v-model='contact.name' placeholder="Name">	
  <input type="text" v-model='contact.tel' placeholder="Contact No">

  <button class="btn btn-negative btn-outlined btn-block button-std" @click='add' >Add Contact</button>
</form>

<form v-else>

  <input type="text" v-model='groupname' placeholder="Groupname">

  <button class="btn btn-negative btn-outlined btn-block button-std" @click='add' >
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
      contacts: [{name:'Andahara',tel:'94450338'},{name:'william', tel:'9444555'},{name:'lionel',tel:'555-5555'}]
	}
  },

  methods: {
	
	hello() {
	  console.log('hello')

	  axios.get("http://date.jsontest.com/")
	  .then((res) => {
	  	console.log(res.data)
	  	}
	  )

	},

	add(){
		console.log('add')
		let item = {name:this.contact.name, tel: this.contact.tel}
		this.contact.name = ''
		this.contact.tel = ''
		this.contacts.push(item); 
	},
  },

  computed: {

  	isGroup() {
  		return this.check.length > 0
  	}
  }
}
</script>
