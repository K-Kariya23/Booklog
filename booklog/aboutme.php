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
    <link rel="stylesheet" href="style_bookpage.css">
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
                <a class="nav-link active" href="index.php">Home</a>
                <a class="nav-link" href="aboutme.php" aria-current="page" >About Me</a>
                <?php foreach ($CatNames as $key=>$value): ?>
                <a class="nav-link" href="index_search.php?name=<?php echo $key ?>"><?php echo $key ?></a>
                <?php endforeach ?>
            </div>
            </div>
        </div>
    </nav>

    <!-- Books -->
    <div class="main main1">
        <div class="container Books">
            <div class="row">
                <!-- ページを二分する -->
                <div class="col">
                    <div class="Explain">
                        <h2>ABOUT ME: K.Kariya</h2>
                        <p>写真をクリックするとtwitterに飛びます</p>
                        <a href="https://twitter.com/KKariya8">
                            <img class="Explain-img" src="Book_img/my_face.png" width=200px>
                        </a>
                        <h5>I'm interested in...</h5>
                        <p>数理統計学・機械学習・Webアプリケーション</p>
                    </div>
                </div>
                <div class="col">
                    <div class="Sidebar">
                        <div class="comp1">
                            <h5>使用言語</h5>
                            <p class="comp1_p">Python, R, PHP, HTML/CSS, MySQL, SPARQL</p>
                        </div>
                        <div  class="comp1">
                            <h5>資格</h5>
                            <p class="comp1_p">統計検定二級</p>
                        </div>
                        <div  class="comp1">
                            <h5>制作理由</h5>
                            <p class="comp1_p">読んでいる本を通じて人と仲良くなってみたいと考えたから.
                                <br>私のことを知りたいと考えた方に私がどのような人間か伝えやすくするため.
                            </p>
                        </div>
                        <div  class="comp1">
                            <h5>出身大学</h5>
                            <p>東洋大学</p>
                        </div>
                        <div  class="comp1">
                            <h5>連絡先</h5>
                            <p class="comp1_p">k.kariya23st@gmail.com<br>https://twitter.com/KKariya8</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <!-- Footter -->
    <div class="footer">
      <div class="Footer-List">
        <a href="index.php" class="Footer-List-Item">HOME</a>
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