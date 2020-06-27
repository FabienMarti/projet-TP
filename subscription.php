<?php 
    include 'view/parts/header.php';
    include 'view/parts/functions.php';
    generateBreadcrumb(array('index.php' => 'Referosoria', 'final' => 'Inscription'));
?>
<h2 class="text-center"><u>Inscription</u></h2>
<form class="container border border-dark" action="subscription.php" method="POST">
    <div class="row">
        <div class="form-group col">
            <label for="firstname">Prénom<span class="text-danger">*</span> : </label>
            <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Ex : Stéphane"/>
        </div>
        <div class="form-group col">
            <label for="lastname">Nom<span class="text-danger">*</span> : </label>
            <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Ex : Dupont"/>
        </div>
        <div class="form-group col">
            <label for="nickname">Pseudo<span class="text-danger">*</span> : </label>
            <input class="form-control" type="text" name="nickname" id="nickname" placeholder="Ex : Dupont"/>
        </div>
    </div>
    <div class="form-group">
        <label for="email">Adresse e-mail<span class="text-danger">*</span> : </label>
        <input class="form-control" type="mail" name="email" id="email" placeholder="Ex : Stéphane.Dupont@gmail.com" />
    </div>
    
    <div class="form-group">
        
    </div>
    <div class="form-group">
        
    </div>
    <div class="form-group">
        
    </div>

    <div class="form-group">
        
    </div>
    <button class="btn btn-success" type="submit">Valider</button>
    <p class="text-right"><i class="fas fa-exclamation-triangle"></i> <span class="text-danger">*</span> = Obligatoire <i class="fas fa-exclamation-triangle"></i></p>
</form>

<?php include 'view/parts/footer.php' ?>