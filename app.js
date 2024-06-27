let app = new Vue({
    el: '#app',
    data: {
        message: 'Esse é um Projeto Vue'
    },
    methods: {
        MyName(){
            return 'Projeto Vue methods'
        },
        MyAge(age){
            return `${this.message} - Minha idade é ${30}`
        }
    },
})