<?php include 'views/partials/header.php' ?>

<main class="container">
  <h1 id="name"></h1>
  <?php include 'views/partials/hero.php' ?>
  <?php include 'views/partials/featured.php' ?>


  <div class="row g-5">
    <div class="col-md-8">
      <?php include 'views/partials/posts.php' ?>
    </div>

    <div class="col-md-4">
      <?php include 'views/partials/sidebar.php' ?>
    </div>
  </div>
  <script>
    console.log(document.location);
    let name = document.location.search.substring(6);
    document.getElementById('name').innerHTML = decodeURI(name);
  </script>
</main>
<?php include 'views/partials/footer.php' ?>