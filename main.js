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
            axios.get('https://flynn.boolean.careers/exercises/api/array/music')
            .then((response)  => {
                console.log(response);
            })
        },

    },
})
