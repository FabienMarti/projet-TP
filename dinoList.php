<?php 
    $pageTitle = 'Liste des dinosaures';
    include 'views/parts/header.php';
    include 'views/parts/functions.php';
    generateBreadcrumb(array('index.php' => 'Referosauria', 'final' => $pageTitle));
?>
        <section class="container">
            <div class="row text-center">
            <div class="border border-dark m-auto">
                    <a href="creature.php">
                        <img class="img-fluid " src="assets/img/rexHead.png" style="height: 150px;" alt="Un Tyrannosaure en Image" />
                        <p>Creature</p>
                    </a>
                </div>
                <!-- <div class="border border-dark m-auto">
                    <a href="pageTyrannosaurus.html">
                        <img class="img-fluid " src="assets/img/rexHead.png" style="height: 150px;" alt="Un Tyrannosaure en Image" />
                        <p>Tyrannosaurus</p>
                    </a>
                </div>
                <div class="border border-dark m-auto">
                    <a href="pageParasaurolophus.html">
                        <img class="img-fluid" src="assets/img/parasaurolophusHead.jpg" style="height: 150px;" alt="Un Parasaurolophus en Image" />
                        <p>Parasaurolophus</p>
                    </a>
                </div> -->
            </div>
        </section>
<?php include 'views/parts/footer.php' ?>