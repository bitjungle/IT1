<?php
require 'funksjoner.php'; 
?>
<!DOCTYPE html>
<html lang="no">

<head>
  <meta charset="utf-8">
  <meta name="author" content="bitjungle">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="stiler/mcbergbys-bootstrap.css">
  <title>McBergbys hamburgerskole</title>
</head>

<body>
  <nav class="navbar nav-tabs fixed-top bg-dark navbar-dark navbar-expand-sm pb-0">
    <div class="container">
      <a class="navbar-brand" id="logo" href="#">
        <img src="bilder/burger-1487481.svg" alt="McBergbys logo - CC0 midicomp" style="width: 40px;">McBergbys</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamburgermeny" aria-controls="hamburgermeny"
        aria-expanded="false" aria-label="Vis navigasjonsmeny">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="hamburgermeny">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="index.php">Bestilling</a>
          <a class="nav-item nav-link" href="om.php">Om&nbsp;McBergbys</a>
          <a class="nav-item nav-link active" href="hamburgerskolen.php">Burgerskolen</a>
        </div><!-- navbar-bar -->
      </div><!-- navbar-collapse -->
      <span class="navbar-text d-none d-xl-inline-block ml-5 bg-dark text-white" id="slogan">Vi har de feteste burgerne!</span>
    </div><!-- container -->
  </nav>
  <div class="container" id="hovedomraade">
    <h1>McBergbys hamburgerskole</h1>

    <h2>Lær deg å spise en hamburger</h2>

    <!-- Mer om HTML5-video her: http://www.w3schools.com/tags/tag_video.asp -->
    <div class="embed-responsive embed-responsive-16by9">
      <video class="embed-responsive-item" controls preload="auto">
        <source src="video/how-to-eat-a-hamburger.mp4" type="video/mp4">
        <source src="video/how-to-eat-a-hamburger.ogv" type="video/ogg">
        Nettleseren din har ikke støtte for HTML-video!
      </video>
    </div>
    <p class="kildeinfo">Kilde: <a href="https://www.youtube.com/watch?v=fdrJPejMo80">Studio AnKa</a> - Lisens:
      Creative Commons BY</p>

    <h2>Lær deg å bestille en hamburger på engelsk</h2>

    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lz0IT4Uk2xQ?rel=0&amp;showinfo=0;start=17"
        allowfullscreen></iframe>
    </div>
    <p class="kildeinfo">Kilde: <a href="https://youtu.be/lz0IT4Uk2xQ?t=17s">Pink Panther - " I Would like to buy a
        Hamburger" - Lisens: Standard YouTube-lisens</a></p>
  </div><!-- container -->

<?php
  lag_footer();
?>
</body>

</html>