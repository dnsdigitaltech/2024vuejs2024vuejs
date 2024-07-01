<template>
    <div id="app">
      <h2>{{ title }}</h2>
      <Navbar></Navbar>
      <AllFriends :friends="friends" @delete="deleteFriend"></AllFriends>
      <OnlineFriends :friends="friends"></OnlineFriends>
    </div>  
  </template>
  
  <script>
  import Navbar from './components/Navbar';
  import AllFriends from './components/AllFriends';
  import OnlineFriends from './components/OnlineFriends';
  
  export default {
    name: 'App',
    data(){
      return {
        title: 'Uau, nosso site vue está funcionando',
        friends: [
            {name: 'A', online:true},
            {name: 'B', online:false},
            {name: 'C', online:true},
            {name: 'D', online:false},
            {name: 'E', online:false},
        ]
      }
    },
    components:{
      Navbar,
      AllFriends,
      OnlineFriends
    },
    methods:{
      deleteFriend(payload){
        //console.log(payload);
        this.friends = this.friends.filter(friend =>{
          return friend.name !== payload.name;
        })
      }
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
  