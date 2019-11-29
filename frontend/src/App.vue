<template>

  <div id="app" class="wrapper">
    <SidebarComponent></SidebarComponent>
    <router-view></router-view>
  </div>
</template>

<script>
import SidebarComponent from './components/SidebarComponent.vue'

export default {
  name: 'app',
  components: {
    'SidebarComponent': SidebarComponent,
  }
}
</script>

<style>
.wrapper {
  display: flex;
  width: 100%;
  background-color: #FCFCFC;
}
</style>
