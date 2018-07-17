<template>


	
<div>
	
<div class='card'>
	Contacts {{name}}
</div>

  <ul class="table-view group-view">
    <li class="table-view-cell">
	<div class=""><span class="icon icon-person"></span></div>
	<div class="" style='width:40%'>Andahara</div>
	<div class="small color-grey">94450338
	</div>

	</li>
    <li class="table-view-cell">
	<div class=""><span class="icon icon-person"></span></div>
	<div class="" style='width:40%'>William</div>
	<div class="small color-grey">944 5555 </div>

	</li>
    <li class="table-view-cell">
	<div class=""><span class="icon icon-person"></span></div>
	<div class="" style='width:40%'>Lionel</div>
	<div class="small color-grey">9445 0338</div>

	</li>
    <li class="table-view-cell">
	<div class=""><span class="icon icon-person"></span></div>
	<div class="" style='width:40%'>Steven</div>
	<div class="small color-grey">Hello </div>

	</li>	
  </ul>
  
<section>
	<button @click='hello'>say hello</button>
<form>
  <input type="text" placeholder="Name">	
  <input type="text" placeholder="Contact No">

  <button class="btn btn-negative btn-outlined btn-block" style='padding:8px;font-size:14px'>Create Contact</button>
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
      name: 'lionel'
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

	}
  }
}
</script>
