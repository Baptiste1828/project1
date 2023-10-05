<?php
$errors = [];

if (empty(trim($_POST['username'])))
    $errors[] = 'Le nom est obligatoire.';
if (empty(trim($_POST['surname'])))
    $errors[] = 'Le prénom est obligatoire.';
if (empty(trim($_POST['courriel'])) || !filter_var($_POST['courriel'], FILTER_VALIDATE_EMAIL))
    $errors[] = "L'email est obligatoire et doit correspondre au format email.";
if (empty(trim($_POST['tel'])))
    $errors[] = 'Le numéro de téléphone est obligatoire.';
if (empty(trim($_POST['réservation'])))
    $errors[] = 'Le nombre de couverts est obligatoire.';
if (trim($_POST['réservation']) <= 0)
    $errors[] = 'Le nombre de couvert ne peux pas être inférieur à 1.';
if (empty(trim($_POST['date'])))
    $errors[] = 'La date de la réservation est obligatoire.';
if (empty(trim($_POST['heure'])))
    $errors[] = "L'heure de la réservation est obligatoire.";
if (!empty($errors)) {
    require 'error.php';
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation confirmé</title>
    <link rel="stylesheet" href="css/styleReservation.css">
</head>

<body>

    <header>
        <h1>Réservation confirmé !</h1>
    </header>

    <main>
        <div>
            <p>
                Nous vous confirmons votre réservation au nom de <?=htmlentities($_POST['username'])?> <?=htmlentities($_POST['surname'])?></br>
                pour <?=htmlentities($_POST['réservation'])?> personne(s) le <?=htmlentities($_POST['date'])?> à <?=htmlentities($_POST['heure'])?>.</br>
                Vous allez recevoir un mail de confirmation sur votre adresse <?=htmlentities($_POST['courriel'])?> ainsi qu'un SMS au <?=htmlentities($_POST['tel'])?>.</br>
            </p>
            <?php if (!empty(trim($_POST['comments']))) :?>
            <p>
                Nous prenons en compte votre commentaire pour votre réservation :</br>
                <?=htmlentities($_POST['comments'])?>
            <?php endif; ?>
            </p>
        </div>
    </main>
</body>

</html>