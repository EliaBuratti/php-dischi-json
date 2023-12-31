<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disc</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- style.css -->
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
    <div id="app">

        <!-- navbar -->

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="##">
                    <i class="fa-solid fa-music fa-xl" style="color: #D6CC99;"></i>
                </a>
            </div>
        </nav>

        <div class="container mt-5">

            <div v-if="overlay" class="eb_overlay-info ">
                <div class="card p-4 eb_card-color">
                    <img :src=" disc.poster " class="w-75 mx-auto rounded img-fluid" :alt="disc.title">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ disc.title }}</h5>
                        <p class="card-text">{{ disc.author }}</p>
                        <h6>{{ disc.year }}</h6>
                    </div>
                    <button @click="overlay = !overlay" class="btn btn-danger">Close</button>
                </div>

            </div>

            <div class="row gap-4 justify-content-center position-relative">


                <div v-for="(disc, i) in ListDisc" :key="disc + i" @click="cardInfo(i)" class="card px-0 pt-4 eb_card eb_card-color" style="width: 18rem;">
                    <img :src=" disc.poster " class="w-75 mx-auto rounded img-fluid" :alt="disc.title">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ disc.title }}</h5>
                        <p class="card-text">{{ disc.author }}</p>
                        <h6>{{ disc.year }}</h6>
                    </div>
                </div>
            </div>

        </div>



    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!-- vueJs -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- my js script -->

    <script type="text/javascript" src="./assets/js/script.js"></script>

</body>

</html>