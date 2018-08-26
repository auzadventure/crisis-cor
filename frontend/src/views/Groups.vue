<template>
  <div class='block'>
  
<div class="card">
  <ul class="table-view group-view">
    <li v-for="group in groups" class="table-view-cell">
	<div class=""><span class="icon icon-person"></span></div>
	<div class="" style='width:60%'>
	<router-link :to="'/groups/' + group.id">{{group.name}}</router-link>
	<div class="small color-grey" style='margin-left:20px'>{{ group.count }} Members</div>
	</div>
	

	</li>
  </ul>
</div>

  
  
<section>
<form>
		<router-link to="/groups/create" class='btn btn-positive btn-block'>
			<span class="icon icon-plus"></span> Create Group 
		</router-link> 
  
		<button class='btn btn-block' @click='getAll'>Get All </button>
</form>
</section>

	</div>
</template>

<script>
// @ is an alias to /src
import axios from 'axios';

import * as GLOBALVARS from './../globalvars'

var url = GLOBALVARS.API_URL + "/groups"

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

		axios.get(url)
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