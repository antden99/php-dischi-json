<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP Dischi JSON</title>
  </head>
  <body class="bg-dark">
    <div id="app">
      <div class="container text-white">
        <div class="logo"><i class="fa-brands fa-spotify text-success logo"></i></div>
        <div class="row ">
          <div class="col-4 h-100 my-3" v-for="disc in discsList" >
            <div class="card text-center p-4 bg_card text-white">
                <img :src="disc.poster" alt="" class="w-100 h-100">
                <div class="fw-bold">{{disc.title}}</div>
                <div>{{disc.author}}</div>
                <div class="fw-bold ">{{disc.year}}</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.8/axios.min.js"
      integrity="sha512-PJa3oQSLWRB7wHZ7GQ/g+qyv6r4mbuhmiDb8BjSFZ8NZ2a42oTtAq5n0ucWAwcQDlikAtkub+tPVCw4np27WCg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./assets/main.js"></script>
  </body>
</html>
