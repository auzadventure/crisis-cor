<template>

<div class="">
<section>
	<form>
	  <input type="text" placeholder="Group Name">

	  <button class='btn btn-positive btn-block'>Create</button>
	</form>
</section>

</div>


</template>

<script>
// @ is an alias to /src
import axios from 'axios';

import * as GLOBALVARS from './../../globalvars'

var url = GLOBALVARS.API_URL + "/groups"

export default {
  name: 'groups',
  data() {
	return {
		groups: {}
	}
  },
  

  methods: {


  }
  
  

}
</script>