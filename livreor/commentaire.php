<?php
$title = 'Ajouter un commentaire';

session_start();

$connect= mysqli_connect("localhost", "root", "", "livreor");
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["id"])) {
    header("Location: connexion.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Maitree:wght@300&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
    
    <title>Document</title>
</head>
<body>

<?php include("include/header.php") ?>
<main>
   
    
        <legend>Ajouter un commentaire au livre d'or</legend>
        <form action="submit.php" method="post">
            <label for="text">Votre commentaire : </label>
            <textarea id="text" type="text" name="comm"></textarea>
            <input type="submit" name="envoyer" value="Envoyer">
        </form>
</main>
<footer>
        <?php include("include/footer.php") ?>
</footer>
</main>