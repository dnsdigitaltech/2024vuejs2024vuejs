<template>
  <div id="app">
    <h2>{{ title }}</h2>
    <Navbar></Navbar>
    <Hook></Hook>
  </div>  
</template>

<script>
import Navbar from './components/Navbar';
import Hook from './components/Hook';

export default {
  name: 'App',
  data(){
    return {
      title: 'Uau, nosso site vue está funcionando',
    }
  },
  components:{
    Navbar,
    Hook
  },
  methods:{
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
  margin-top: 60px;
}
</style>
