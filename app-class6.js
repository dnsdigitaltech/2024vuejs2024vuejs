let app = new Vue({
    el: '#app',
    data: {
        name: 'Davi'
    },
    methods: {
        NameChange(e){
            //console.log(e.target.value)

            this.name = e.target.value
        }
    },
})