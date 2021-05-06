<template>
  <div id="app">

    <TheNavbar />

    <TheHeading /> 

  </div>
</template>

<script>
import TheNavbar from './components/TheNavbar.vue'
import TheHeading from './components/TheHeading.vue'

export default {
  name: 'App',
  components: {
    TheNavbar,
    TheHeading
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
</style>