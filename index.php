<?php

//Connection à la bdd
$pdo = new PDO('mysql:host=localhost;dbname=restaurants', 'root', '', array(PDO::ATTR_ERRMODE =>
PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//var_dump($_POST);

$type = ["gastronomique", "brasserie", "pizzeria", "autre"];
$note = [0, 1, 2, 3, 4, 5];
$erreur = '';

if (isset($_POST) && !empty($_POST)) {

    if (strlen($_POST['nom']) < 2) {
        $erreur = 'Veuillez inscrire le nom du restaurant';
    }
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>restochris</title>
    <script src="https://cdn.tiny.cloud/1/zo544k4g50xgztmkdwx4d2j3cix550rszxwmgsi4txd2bsz4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
   
</head>

<body>
    <?php echo $erreur; ?>
    <form action="index.php" method="POST">
        <input type="text" name="nom">
        <input type="text" name="adresse">
        <input type="text" name="telephone">
        <select name="type">

            <?php
            foreach ($type as $valeur) {
                echo "<option value='$valeur'>Restaurant $valeur</option>";
            }
            ?>

        </select>

        <select name="note">

            <?php
            foreach ($type as $valeur) {
                echo "<option value='$valeur'>Restaurant $valeur</option>";
            }
            ?>


        </select>


        <textarea name="avis"></textarea>
        <button type="submit">Envoyer votre avis</button>
        
    </form>
    <script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>
   
</body>

</html>