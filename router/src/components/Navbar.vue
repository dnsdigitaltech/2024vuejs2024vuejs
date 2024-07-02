<template>
    <div>
        <nav>
            <ul>
                <li><router-link to="/">Home</router-link></li>
                <li><router-link to="/sobre">Sobre</router-link></li>
                <li><router-link to="/contato">Contato</router-link></li>
            </ul>
        </nav>

        <div>
            <ul>
                <li v-for="(id,index) in userIds" :key="index">
                    <router-link :to="{name: 'Profile', params:{user_id: id}}">Perfil ({{ id }})</router-link>
                </li>
            </ul>
        </div>
        <button @click="Contact">Contato</button> <button @click="About">Sobre</button>
    </div>
</template>

<script>
import About from './About.vue';
import Contact from './Contact.vue';

export default {
    name: 'Navbar',
    data(){
        return {
            userIds: ['1', '2', '3', '4', '5', '6', '7', '8']
        }
    },
    methods:{
        Contact(){
            this.$router.push({name: 'Contact'})
        },
        About(){
            this.$router.push({name: 'About'})
        }
    }
}
</script>

<style scoped>
    nav{
       text-align: center; 
    }

    nav ul{
        padding: 0;
    }

    nav li{
        display: inline-block;
        list-style-type: none;
        margin: 0;
        padding: 8px;
    }
    a.router-link-exact-active{
        color: red;
    }
</style>