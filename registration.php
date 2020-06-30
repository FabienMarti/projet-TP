<?php 
    $pageTitle = 'Inscription';
    include 'view/parts/header.php';
    include 'view/parts/functions.php';
    include 'controller/registrationController.php';
    generateBreadcrumb(array('index.php' => 'Referosauria', 'final' => 'Inscription'));
?>
<h2 class="text-center"><u>Inscription</u></h2>
<form class="container border border-dark p-3 rounded" action="registration.php" method="POST">
    <div class="row">
        <p class="col text-right"><i class="fas fa-exclamation-triangle"></i> <span class="text-danger">*</span> = Champs obligatoire <i class="fas fa-exclamation-triangle"></i></p>
    </div>
    <div class="form-group <?= count($_POST) > 0 ? (isset($formErrors['username']) ? 'has-danger' : 'has-success') : '' ?>">
            <label for="username">Nom d'utilisateur<span class="text-danger">*</span> : </label>
            <input type="text" name="username" id="username" placeholder="Ex : DinoLOVER" class="form-control <?= count($_POST) > 0 ? (isset($formErrors['username']) ? 'is-invalid' : 'is-valid') : '' ?>" <?= isset($_POST['username']) ? 'value="' . $_POST['username'] . '"' : '' ?> />
            <?php if (isset($formErrors['username'])) { ?>
                <p class="text-danger text-center"><?= $formErrors['username'] ?></p>
            <?php } ?>
    </div>
    <div class="row">
        <div class="form-group col <?= count($_POST) > 0 ? (isset($formErrors['password']) ? 'has-danger' : 'has-success') : '' ?>">
            <label for="password">Mot de passe<span class="text-danger">*</span> : </label>
            <input type="password" name="password" id="password" placeholder="Ex : Aa1234*" class="form-control <?= count($_POST) > 0 ? (isset($formErrors['password']) ? 'is-invalid' : 'is-valid') : '' ?>" <?= isset($_POST['password']) ? 'value="' . $_POST['password'] . '"' : '' ?> />
            <?php if (isset($formErrors['password'])) { ?>
                <p class="text-danger text-center"><?= $formErrors['password'] ?></p>
            <?php } ?>
        </div>
        <div class="form-group col">
            <label for="confirmPassword">Confirmez le mot de passe<span class="text-danger">*</span> : </label>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder="Ex : Aa1234*" class="form-control" />
            <p class="text-danger text-center"><?= (isset($_POST['confirmPassword']) && $_POST['confirmPassword'] != $_POST['password']) ? 'Les mots de passe ne correspondent pas' : '' ?></p>
        </div>
    </div>
    <div class="row">
        <div class="form-group col <?= count($_POST) > 0 ? (isset($formErrors['email']) ? 'has-danger' : 'has-success') : '' ?>">
            <label for="email">Adresse e-mail<span class="text-danger">*</span> : </label>
            <input type="mail" name="email" id="email" placeholder="Ex : stephane.dupont@gmail.com" class="form-control <?= count($_POST) > 0 ? (isset($formErrors['email']) ? 'is-invalid' : 'is-valid') : '' ?>" <?= isset($_POST['email']) ? 'value="' . $_POST['email'] . '"' : '' ?> />
                <?php if (isset($formErrors['email'])) { ?>
                    <p class="text-danger text-center"><?= $formErrors['email'] ?></p>
                <?php } ?>
        </div>
        <div class="form-group col">
            <label for="confirmEmail">Confirmez l'adresse e-mail<span class="text-danger">*</span> : </label>
            <input type="mail" name="confirmEmail" id="confirmEmail" placeholder="Ex : stephane.dupont@gmail.com" class="form-control" />
            <p class="text-danger text-center"><?= (isset($_POST['confirmEmail']) && $_POST['confirmEmail'] != $_POST['email']) ? 'Les adresses e-mail ne correspondent pas' : '' ?></p>

        </div>
    </div>
    <div class="row">
        <div class="col"><input type="checkbox" name="validate" id="validate" />
            <label for="validate">J'accepte les <a href="#">CGU.</a></label>
            <p class="text-danger"> <?= isset($formErrors['validate']) ? $formErrors['validate'] : '' ?> </p>
        </div>
        <div class="col text-right">
            <button class="btn btn-success" type="submit" name="validateForm">Valider</button>
        </div>
    </div>
</form>
<?php include 'view/parts/footer.php' ?>