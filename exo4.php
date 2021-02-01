<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 8 exercice 4</title>
    <link rel="stylesheet" href="assets/css/style.css">


</head>

<body>
    <nav>
        <ul>
            <li><a href="exo1.php">Ex 1</a></li>
            <li><a href="exo2.php">Ex 2</a></li>
            <li><a href="exo3.php">Ex 3</a></li>
            <li><a href="exo4.php">Ex 4</a></li>
            <li><a href="exo5.php">Ex 5</a></li>
            <li><a href="exo6.php">Ex 6</a></li>
            <li><a href="exo7.php">Ex 7</a></li>
            <li><a href="exo8.php">Ex 8</a></li>
            <li><a href="TP.php">TP</a></li>
        </ul>

        <h1>PHP Partie 8 : Les dates</h1>
        <h2>Exercice 4<h2>
                <p>Afficher le timestamp du jour.
                    Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>

                <?php

                //OPTION 1 Methode objet
                $timestamp = new DateTime();
                echo $timestamp->getTimestamp();

                echo "<hr>";

                //OPTION 2 
                echo time();

                ?>

</body>

</html>