let app = new Vue({
    el: '#app',
    data: {
        dollar: 100
    },
    methods: {
        Amount(pound){
            this.dollar += pound
        }
    },
})