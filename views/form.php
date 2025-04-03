<?php include 'partials/header.php' ?>
<main class="container">
  <h1>Form</h1>
  <?php if($name && $age): ?>
    <h2>Your name is <?=$name?> and you are <?=$age?> old</h2>
  <?php endif ?>
    <a href="/formanswer?name=Kaspar&age=32&id=64&page=2&order=asc&sort=name">Get link</a>

  <form action="/formanswer?name=Martin&id=23" method="POST">
    <input name="name" type="text">
    <input name="age" type="number">
    <input type="submit">
    <!-- <button>Submit</button> -->
  </form>
</main>
<?php include 'partials/footer.php' ?>