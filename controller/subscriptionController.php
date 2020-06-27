<?php
$civilityList = array('Mr' => 'Monsieur','Mme' => 'Madame', 'Mlle' => 'Mademoiselle');
$regexList = array('name' => '%^[\p{L}]{1}[\' \-\p{L}]+$%', 'username' => '%^[a-zA-Z]\w*$%', 'password' => '%^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$%');
$formErrors = array();

if(isset($_POST['validateForm'])){
    if(count($_POST) > 0){

        if(!empty($_POST['lastname'])) {
            if(preg_match($regexList['name'], $_POST['lastname'])) {
                $lastname = htmlspecialchars($_POST['lastname']);
            }else{
                $formErrors['lastname'] = 'Merci de n\'utiliser que des lettres.';
            }
        }else{
            $formErrors['lastname'] = 'Votre nom de famille n\'est pas renseigné.';
        }

        if(!empty($_POST['firstname'])) {
            if(preg_match($regexList['name'], $_POST['firstname'])) {
                $firstname = htmlspecialchars($_POST['firstname']);
            }else{
                $formErrors['firstname'] = 'Merci de  n\'utiliser que des lettres.';
            }
        }else{
            $formErrors['firstname'] = 'Votre prénom n\'est pas renseigné.';
        }

        if(!empty($_POST['email'])){
            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $emailAdress = htmlspecialchars($_POST['email']);
            }else{
                $formErrors['email'] = 'Merci de respecter le format d\'e-mail valide.';
            }
        }else{
            $formErrors['email'] = 'Veuillez renseigner votre e-mail.'; 
        }

        if(!empty($_POST['confirmEmail'])){
            if(filter_var($_POST['confirmEmail'], FILTER_VALIDATE_EMAIL)){
                $emailAdress = htmlspecialchars($_POST['confirmEmail']);
            }else{
                $formErrors['confirmEmail'] = 'Merci de respecter le format d\'e-mail valide.';
            }
        }else{
            $formErrors['confirmEmail'] = 'Veuillez renseigner votre e-mail.'; 
        }

        if(!empty($_POST['username'])){
            if(preg_match($regexList['username'], $_POST['username'])){
                $emailAdress = htmlspecialchars($_POST['username']);
            }else{
                $formErrors['username'] = 'Merci de respecter le format lettres, numéros sans caractères spéciaux.';
            }
        }else{
            $formErrors['username'] = 'Veuillez renseigner votre e-mail.'; 
        }

        if(!empty($_POST['password'])){
            if(preg_match($regexList['password'], $_POST['password'])){
                $emailAdress = htmlspecialchars($_POST['password']);
            }else{
                $formErrors['password'] = 'Utilisez 8 caractères, minimum 1 lettre et 1 chiffre.';
            }
        }else{
            $formErrors['password'] = 'Veuillez renseigner votre e-mail.'; 
        }
    }
}?>

