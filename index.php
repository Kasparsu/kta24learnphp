<?php
$heroTitle = 'World news';
$posts = [
  ['title' => 'World news 1', 'author' => 'Kaspar', 'body' => 'some content here 1'],
  ['title' => 'World news 2', 'author' => 'Martin', 'body' => 'some content here 2'],
  ['title' => 'World news 3', 'author' => 'Peter', 'body' => 'some content here 3'],
  ['title' => 'World news 4', 'author' => 'Pets', 'body' => 'some content here 4'],
];
?>

<?php include 'partials/header.php' ?>

<main class="container">

  <?php include 'partials/hero.php' ?>
  <?php include 'partials/featured.php' ?>


  <div class="row g-5">
    <div class="col-md-8">
      <?php include 'partials/posts.php' ?>
    </div>

    <div class="col-md-4">
      <?php include 'partials/sidebar.php' ?>
    </div>
  </div>

</main>
<?php include 'partials/footer.php' ?>