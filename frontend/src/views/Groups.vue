<template>
  <div>
  <ul class="table-view group-view">
    <li v-for="group in groups" class="table-view-cell">
	<div class=""><span class="icon icon-person"></span></div>
	<div class="" style='width:60%'>{{group.name}}</div>
	<div class="small color-grey">{{group.members.split(",").length}} pax </div>

	</li>


	</li>	
	
	
  </ul>


	<button class='btn btn-block' @click='getAll'>Get All </button>
  </div>
</template>

<script>
// @ is an alias to /src
import axios from 'axios';

export default {
  name: 'groups',
  data() {
	return {
		groups: {}
	}
  },
  
  mounted() {
	this.getAll()
  },

  methods: {
	getAll() {
		var self = this;

		axios.get('http://localhost:8080/api/groups')
			.then( res => {
						self.groups = res.data
						console.log(res.data);
					})
			.catch( err => {
			  console.log(err)}
			)  
	}
  }
  
  

}
</script>