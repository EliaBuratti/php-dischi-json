const { createApp } = Vue

createApp({

    data() {

        return {
            ListDisc: [],
            overlay: false,
            discInfo: '',
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

        cardInfo(numCard) {
            console.log('ciccato');
            this.discInfo = '';

            axios.get('server.php').then(response => {
                console.log(response);
                this.discInfo = response.data[numCard];
            })
        }

    },
}).mount('#app');