<template>
  <div id="app">

    <header class="bar bar-nav background-red">
      <h1 class="color-white title">Crisis Kor </h1>
      <a class="icon icon-compose pull-right color-white "></a>

    </header>
  <div class="bar bar-standard bar-header-secondary">
    <div class="segmented-control">
    <router-link class="control-item" to="/">SMS</router-link>
    <router-link class="control-item" to="/groups">Groups</router-link>
    <router-link class="control-item" to="/contacts">Contacts</router-link>

    </div>
  </div>
  <div class='content'>
  


    <router-view/>
</div>
    
  </div>
</template>

<style>



</style>
