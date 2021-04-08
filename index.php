<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    <title>SQLHeroes</title>
  </head>
  <body>
    <div class="container mt-5 text-center">
      <h1>SQLHeroes</h1>
      <div class="row mt-5 text-center">
        <div class="card">
    <div class="card-body">
    <h5 class="card-title">Menu</h5>
    <p class="card-text"><a href="/api.php?route=getAllHeroes" target="_blank">Get All Heroes</a></p>
    <p class="card-text"><a href="/api.php?route=getHeroByID&hero_id=5" target="_blank">Get Hero By ID</a></p>
    <p class="card-text"><a href="/api.php?route=addHero" target="_blank">Add A Hero</a></p>
    <p class="card-text"><a href="/api.php?route=deleteHero" target="_blank">Delete A Hero</a></p>
      <p class="card-text"><a href="/api.php?route=updateHero" target="_blank">Update A Hero's Abilities</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>