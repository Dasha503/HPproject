<!doctype html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="description" content="Dropcast is a responsive HTML/CSS/Javascript template for podcasts">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Dropcast - Podcast Template from Codrops</title>
      <link rel="stylesheet" href="assets/css/dropcast.css">
      <link rel="author" href="Amie Chen for Codrops">
      <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Rufina:400,700|Source+Sans+Pro:200,300,400,600,700" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    </head>
    <body>
      <div id="site__bg"></div>
      <div class="main">
        <nav>
          <div class="logo nav__logo">
            <a href="/"><img src="assets/images/logo.svg" alt="logo"/></a>
          </div>
          <ul class="nav__list">
            <li class="nav__item"><a href="#">Episodes</a></li>
          </ul>
        </nav>
        <section class="site">
          <h1 class="site__title site__title--separator">Dropcast</h1>
          <p class="site__description">A podcast discussing the anything web related with the world’s experts</p>
        </section>
        <section class="episodes">
            <?php
                $con = mysqli_connect("localhost", "root", "", "DB");
                mysqli_set_charset($con, "utf8");

                if ($con == false) {
                    echo ("Ошибка подключения: " . mysqli_connect_error());
                }
                else {
                    $sql = "SELECT id, name, description, image FROM data";
                    $result = mysqli_query($con, $sql);
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

                    foreach ($rows as $row) {
                        echo (
                                "<article class='episode'>
                                <h2 class='episode__number'>0{$row['id']}</h2>
                                <div class='episode__media'>
                                  <a href='detail{$row['id']}' class='episode__image' style='background-image: url({$row['image']});'></a>
                                </div>
                                <div class='episode__detail'>
                                  <a href='detail{$row['id']}' class='episode__title'><h4>{$row['name']}</h4></a>
                                  <p class='episode__description'>{$row['description']}</p>
                                </div>
                              </article>"
                        );
                    }
                }
            ?>
        </section>
      </div>
      <script src="assets/js/dropcast.js"></script>
    </body>
</html>