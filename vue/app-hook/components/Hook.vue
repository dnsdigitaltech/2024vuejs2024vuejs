<template>
    <div class="hook">
        <h1>{{ title }}</h1>
        <button @click="changeTitle">Clique aqui</button>
    </div>
</template>

<script>
export default {
    name: 'Hook',
    data(){
        return {
            title: 'Dados principais Hook'
        }
    },
    methods:{
        changeTitle(){
            this.title = 'Projeto VueJs'
        }
    },
    beforeCreate(){
        alert('Before Create Hook')
    },
    created() {
        alert('Created Hook')
    },
    beforeMount(){
        alert('Before Mount Hook')
    },
    mounted() {
        alert('Mounted Hook')
    },
    beforeUpdate(){
        alert('Before update message')
    }
}
</script>

<style>
 
</style>