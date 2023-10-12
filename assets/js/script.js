const { createApp } = Vue

createApp({

    data() {

        return {
            ListDisc: [],
            overlay: false,
            discInfo: '',
            disc: '',

        }
    },

    mounted() {

        //console.log(this.ListDisc);

        axios.get('server.php').then(response => {
            //console.log(response);
            this.ListDisc = response.data;
        })

    },

    methods: {

        cardInfo(numDisc) {
            console.log('clccato');


            axios.get('server.php', {
                params: {
                    discInfo: numDisc,
                }
            }).then(response => {
                console.log(response);
                this.disc = response.data;
            })

            this.overlay = !this.overlay
        }

    },
}).mount('#app');