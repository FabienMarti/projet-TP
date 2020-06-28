<?php 
    $pageTitle = 'Découvrir';
    include 'view/parts/header.php';
    include 'view/parts/functions.php';
    generateBreadcrumb(array('index.php' => 'Referosauria', 'final' => $pageTitle));
?>
<main class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand d-md-none" href="#">Découvrir</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">La Paléonthologie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Les Dinosaures</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Créatures Océaniques</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Réptiles Volants</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Les Insectes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Les Grandes Extinctions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">La Terre d'une autre époque</a>
      </li>
    </ul>
  </div>
</nav>
</main>
<?php include 'view/parts/footer.php' ?>