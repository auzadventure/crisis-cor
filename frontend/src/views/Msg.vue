<template>


<div style='padding:5px;'>
	<p class='msg-card'>Warning Gunman spotted School entrance B. THIS IS NOT A DRILL!
	<br> Are you in the build? 0 - no, 1 - yes
	
	</p>

	
	<div class="msg-card-reply">
	<div class="">
	<span><router-link to="/reply">Yes: 20</router-link></span> <br>
	<span>No : 10</span>
	</div>
	
	</div>
	

</div>



</template>

<script>
// @ is an alias to /src


export default {
  name: 'msg',

}
</script>
