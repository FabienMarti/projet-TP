<?php 
    $pageTitle = 'Dino'; //request pour le titre avec la BDD
    include 'view/parts/header.php';
    include 'view/parts/functions.php';
    generateBreadcrumb(array('index.php' => 'Referosoria', 'dinoList.php' => 'Liste des dinosaures', 'final' => $pageTitle));
?>


<?php include 'view/parts/footer.php' ?>