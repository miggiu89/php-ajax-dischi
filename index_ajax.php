<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>
<body>
    <!-- header -->
    <header>
        <img src="img/logo.png" alt="logo">
    </header>

    <main>
        <div class="container" id="root" v-if="albums.length">
        
            <div class="card-album" v-for="album in albums" >
                <img :src="album.poster" :alt="album.title">
                <h3 class="title">{{ album.title }}</h3>
                <p class="author">{{ album.author }}</p>
                <p class="year">{{ album.year }}</p>
            </div>
        
        </div>
    </main>
   <script src="vue/vue.js"></script> 
</body>
</html>