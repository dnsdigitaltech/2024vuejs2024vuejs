<template>
  <div id="app">
    <h2>{{ title }}</h2>
    <Navbar></Navbar>
    <nav>
      <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Post</a></li>
          <li><a href="">Sobre</a></li>
          <li><a href="">Contato</a></li>
      </ul>
    </nav>
  </div>  
</template>

<script>
import Navbar from './components/Navbar';

export default {
  name: 'App',
  data(){
    return {
      title: 'Uau, nosso site vue está funcionando'
    }
  },
  components:{
    Navbar,
  },
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
