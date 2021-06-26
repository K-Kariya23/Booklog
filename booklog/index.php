<?php
require_once('ClassBook.php');
require_once('ClassExplain.php') ;
require_once('DataBook.php');

?>

<!doctype html>
<html lang="jp">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Booklog</title>
  </head>
  <body>
    <div class="title">
      <h1>K.KariyaのBooklog</h1>
    </div>
    <!-- Navibar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Menu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="aboutme.php">About Me</a>
            <?php foreach ($CatNames as $key=>$value): ?>
              <a class="nav-link" href="index_search.php?name=<?php echo $key ?>"><?php echo $key ?></a>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </nav>

    <!-- Books -->
    <div class="main">
      <div class="container Books">
        <div class="Explain">
          <h2>These are the books I recommend!</h2>
          <p>私のお勧めの本です</p>
          <a href="aboutme.php">
            <img class="Explain-img" src="Book_img/my_face.png" width=200px>
          </a>
          <h5>紹介者： K.Kariya</h5>
        </div>
        <div class="row">
          <?php foreach($Books as $Book): ?>
            <div class="col-md-3 col-sm-4 col-6 BookShell">
              <a href="bookpage.php?name=<?php echo $Book->getBookName() ?>"><img src="<?php echo $Book->getBookImg() ?>" class="BookImg"></a>
            </div>
          <?php endforeach ?>
        </div>
      </div>
    </div>
    <!-- Footter -->
    <div class="footer">
      <div class="Footer-List">
        <a href="" class="Footer-List-Item">HOME</a>
        <a href="aboutme.php" class="Footer-List-Item">About Me</a>
        <?php foreach ($CatNames as $key=>$value): ?>
          <a href="index_search.php?name=<?php echo $key ?>" class="Footer-List-Item"><?php echo $key ?></a>
        <?php endforeach ?>
      </div>
      <div class="Footer-Inner-CopyRight">
        ©2021 K.Kariya.
      </div>
    </div>
  </body>
</html>