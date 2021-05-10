Vue.config.devtools = true;

var app = new Vue({

    el: '#root',
    data: {
        stanze: [],
    },

    mounted() {
        axios.get('http://localhost/db-hotel/database/stanze.php')
        .then((response)  => {
            this.stanze  = response.data.response;
            console.log(response.data.response);
        });
    },
})
