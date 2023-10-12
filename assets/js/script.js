const { createApp } = Vue

createApp({

    data() {

        return {
            ListDisc: [],
        }
    },

    mounted() {

        //console.log(this.ListDisc);

        axios.get('server.php').then(response => {
            console.log(response);
            this.ListDisc = response.data;
        })

    },

    methods: {

    },
}).mount('#app');