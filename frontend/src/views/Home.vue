<template>

<div>
  <ul class="table-view sms-view">
    <li class="table-view-cell">
		<router-link to="/msg">
			<span class='small color-red'>Warning! Gunman Spotted in china ...</span>
			<span class='small color-grey' style=''>15.12pm</span>
			<br>
			<span class='text-size-small color-grey'>Teachers</span>
			
		</router-link> 					

	</li>
    <li class="table-view-cell">
								
			<span class='small color-red'>Exit 4 Blocked ...</span>
			<span class='small color-grey' style=''>15.18pm</span>
			<br>
			<span class='text-size-small color-grey'>In Building</span>	
	</li>

    <li class="table-view-cell">
								
		<span class='small color-red'>Evacuate To Raffles Square ...</span> 
			<span class='small color-grey' style=''>15.18pm</span>

			<br>
			<span class='text-size-small color-grey'>Not in Building</span>	
	</li>	
	
  </ul>
</div>



</template>

<script>
// @ is an alias to /src


export default {
  name: 'home',

}
</script>
