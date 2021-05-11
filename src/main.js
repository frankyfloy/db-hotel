Vue.config.devtools = true;

var app = new Vue({

    el: '#root',
    data: {
        stanze: [],
        stanzaSel: null
    },

    mounted() {
        axios.get('http://localhost/db-hotel/database/stanze.php')
        .then((response)  => {
            this.stanze  = response.data.response;
            console.log(response.data.response);
        });
    },

    methods:{
        getDetails(id){
            axios.get(`http://localhost/db-hotel/database/stanze.php/?id=${id}`)
            .then((response)  => {
                this.stanzaSel  = {...response.data.response[0]};
                console.log(this.stanzaSel);
            });
            console.log("----------");
        },

        setNullEvent(){
            this.stanzaSel = null;
            console.log("yoooooooo");
        }
    }
})
