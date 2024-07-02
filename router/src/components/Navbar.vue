<template>
    <div>
        <nav>
            <ul>
                <li><router-link to="/">Home</router-link></li>
                <li><router-link to="/sobre">Sobre</router-link></li>
                <li><router-link to="/contato">Contato</router-link></li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
    name: 'Navbar',
    data(){
        return {

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
</style>