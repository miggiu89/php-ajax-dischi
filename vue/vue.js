var app = new Vue({
    el: "#root",
    data:{
        albums: [],
        musicType: [],
    },

    mounted(){
        axios
            .get('http://localhost/esercizi/php-ajax-dischi/server.php')
            .then((result) => {
            this.albums = result.data;

            this.filter();
            this.order();
            })
    },

    methods: {
        filter(){
            console.log(this.albums);
            this.albums.forEach(element =>{
                if(this.musicType.includes(element.genre)){
                    this.musicType.push(element.genre);
                }
            });
        },
        order(){
            this.albums.sort((albumA,albumB) => albumA.year - albumB.year)
        }
    }


});