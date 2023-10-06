<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire invalide</title>
    <link rel="stylesheet" href="css/styleErrors.css">
</head>
<body>

    <main>
        <div>
            <h1>Réservation échoué : formulaire invalide !</h1>
            <ul>
                <?php foreach($errors as $error) : ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
            <p>
                <a href="index.html">Retour au site internet</a>
            </p>
        </div>
    </main>
    
</body>
</html>
