<template>

  <div id="app">
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
</style>
