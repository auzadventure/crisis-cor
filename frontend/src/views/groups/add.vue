<template>

<div class="">
<section>
  <span>Group Name {{ $route.params.id }}</span>
  <ul class="table-view group-view">
    <li class="table-view-cell" v-for="(item,index) in contacts">
		<div class=""><span class="icon icon-person"></span></div>
		<div class="" style='width:40%'>{{item.name}}</div>
		<div class="small color-grey" style='width:40%'>{{item.number}}</div>

		
	</li>
	
  </ul>	
	
</section>

<section>
  <button class="btn btn-negative btn-outlined btn-block button-std">
		Back
  </button>	
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
		contacts: []
	}
  },
  
  mounted() {
	this.getAll()
	console.log(this.$route.params.id)
  },
  
  methods: {
	getAll() {
		var self = this;
		
		url = url + '/notingroup/' + this.$route.params.id
		
		axios.get(url)
			.then( res => {
						this.contacts = res.data
						console.log(res.data);
					})
			.catch( err => console.log(err))
	},

  }
  
  

}
</script>