Vue.config.devtools = true;

var app = new Vue({

    el: '#root',
    data: {
        stanze: [],
    },

    mounted:function () {
        this.initStanze();
    },

    methods: {

        initStanze(){
            axios.get('https://localhost')
            .then((response)  => {
                console.log(response);
            })
        },

    },
})
