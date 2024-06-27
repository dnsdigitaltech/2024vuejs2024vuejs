let app = new Vue({
    el: '#app',
    data: {
        log: {
           x:0,
           y:0 
        }
    },
    methods: {
        Me(event){
            console.log(event)
        },
        over(e){
            this.log.x = e.offsetX,
            this.log.y = e.offsetY
        }
    },
})