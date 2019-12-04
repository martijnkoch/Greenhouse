<template>
<div class="bg">
<vue-headful
    title="Profile"
    description="Description from vue-headful"
    />
<h1>Login page</h1>
</div>
</template>

<script>
export default {
  name: 'app',
  components: {
    
  }
}
</script>

<style lang="scss" scoped>
@import "../assets/css/variables.scss";

 #sidebar {
     display: none;
 }

 body {
     background: rgb(88,13,128);
background: linear-gradient(90deg, rgba(88,13,128,1) 0%, rgba(80,16,112,1) 77%, rgba(68,20,96,1) 100%);
 }
</style>