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
  <link rel="stylesheet" href="stiler/mcbergbys-bootstrap.css" />
  <title>Om McBergbys</title>
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
          <a class="nav-item nav-link active" href="om.php">Om&nbsp;McBergbys</a>
          <a class="nav-item nav-link" href="hamburgerskolen.php">Burgerskolen</a>
        </div><!-- navbar-bar -->
      </div><!-- navbar-collapse -->
      <span class="navbar-text d-none d-xl-inline-block ml-5 bg-dark text-white" id="slogan">Vi har de feteste
        burgerne!</span>
    </div><!-- container -->
  </nav>
  <div class="container " id="hovedomraade">
    <h1>Om McBergbys</h1>
    <div class="container float-md-left rounded m-2 p-2" id="garantiboks">
      <h4>Vi i McBergbys lover deg:</h4>
      <ul>
        <li>Lynrask servering</li>
        <li>Helt greie priser</li>
        <li>Mat som smaker sånn passe</li>
      </ul>
    </div><!-- garantiboks -->
    <div class="container float-md-right rounded m-2 p-2" id="kartboks">
      <h2>Her er vi</h2>
      <a href="http://kart.finn.no?lng=9.6382631483415&amp;lat=59.152884151367&amp;zoom=17&amp;mapType=normap&amp;WT.mc_id=hp_map_cb&amp;showPin=true">
        <img class="img-fluid" title="Klikk for større kart" alt="Kart som viser hvor McBergbys ligger" src="http://kart.finn.no/map/image?lat=59.15288&amp;lng=9.63826&amp;mapType=norwayVector&amp;height=250&amp;width=250&amp;zoom=17&amp;title=&amp;showPin=on&amp;key=3b5e87ea4f3ec3580cfa068dd0e64d82" />
      </a>
    </div><!-- kartboks -->
    <div class="text-justify" id="omboks">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis lectus ut felis gravida pellentesque. Mauris
        lacinia tellus non nunc bibendum vulputate. Donec consectetur convallis maximus. Curabitur consequat, quam a
        dapibus posuere, sapien tortor gravida purus, at gravida ipsum est a ligula. Duis posuere ante dolor, et
        pharetra tellus semper a. Cras nisl magna, iaculis vel ipsum sit amet, vehicula suscipit nunc. Aliquam erat volutpat. Mauris id lacinia massa, non convallis nisi. Praesent imperdiet erat ut nisl ullamcorper, a ornare tellus pretium.</p>
      <p>Nulla facilisi. In ac scelerisque quam. Fusce mi tortor, pulvinar nec metus ac, sodales viverra mi. Class
        aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin ut libero a lectus
        semper consectetur ut in nulla. Morbi et leo ac augue condimentum congue eu sit amet arcu. Nullam congue felis id
        laoreet lobortis. Aenean ac est luctus, euismod massa non, tincidunt purus. Etiam risus purus, porttitor eu
        dictum eget, porttitor ac nunc.</p>
      <p>Etiam a metus vitae metus porta vehicula ac eget eros. Ut velit lectus, aliquam eu felis ut, porttitor blandit
        nunc. Aliquam erat volutpat. Ut viverra erat lectus, ac imperdiet lectus facilisis ut. Etiam in diam vitae orci
        vulputate sagittis a sit amet metus. Donec in ante a massa egestas tincidunt. Aliquam ut augue pretium,
        bibendum dui at, consequat ipsum. Morbi eget convallis felis. Mauris quis feugiat arcu.</p>
    </div><!-- omboks -->

    <div class="card-deck">
      <section class="card">
        <div class="card-header">Fete hamburgere</div>
        <div class="card-body">
          <img class="card-img img-fluid" src="bilder/hamburgers-400.jpg" alt="Hamburgere - Unsplash License Niklas Rhöse">
          <div class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis lectus ut felis
            gravida pellentesque. Mauris lacinia tellus non nunc bibendum vulputate. Donec consectetur convallis
            maximus. Curabitur consequat, quam a dapibus posuere, sapien tortor gravida purus, at gravida ipsum est a
            ligula. Duis posuere ante dolor, et pharetra tellus semper a. Cras nisl magna, iaculis vel ipsum sit amet,
            vehicula suscipit nunc. Aliquam erat volutpat. Mauris id lacinia massa, non convallis nisi. Praesent
            imperdiet erat ut nisl ullamcorper, a ornare tellus pretium.</div>
        </div>
      </section>
      <section class="card">
        <div class="card-header">God drikke</div>
        <div class="card-body">
          <img class="card-img img-fluid" src="bilder/drinks-400.jpg" alt="Drikkevarer - CC0 rawpixel (pixabay)">
          <div class="card-text">Nulla facilisi. In ac scelerisque quam. Fusce mi tortor, pulvinar nec metus ac, sodales viverra mi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin ut libero a lectus semper consectetur ut in nulla. Morbi et leo ac augue condimentum congue eu sit amet arcu. Nullam congue felis id laoreet lobortis. Aenean ac est luctus, euismod massa non, tincidunt purus. Etiam risus purus, porttitor eu dictum eget, porttitor ac nunc.</div>
        </div>
      </section>
      <section class="card">
        <div class="card-header">Nydelig tilbehør</div>
        <div class="card-body">
          <img class="card-img img-fluid" src="bilder/fries-400.jpg" alt="French fries - CC0 Pexels (pixabay)">
          <div class="card-text">Etiam a metus vitae metus porta vehicula ac eget eros. Ut velit lectus, aliquam eu felis ut, porttitor blandit nunc. Aliquam erat volutpat. Ut viverra erat lectus, ac imperdiet lectus facilisis ut. Etiam in diam vitae orci vulputate sagittis a sit amet metus. Donec in ante a massa egestas tincidunt. Aliquam ut augue pretium, bibendum dui at, consequat ipsum. Morbi eget convallis felis. Mauris quis feugiat arcu.</div>
        </div>
      </section>
    </div>

  </div><!-- container -->

<?php
  lag_footer();
?>
</body>

</html>