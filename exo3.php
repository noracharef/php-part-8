<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 8 exercice 3</title>
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
        <h2>Exercice 3<h2>
                <p>Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
                    Bonus : Le faire en français.</p>

                <?php

                //OPTION 1
                echo date("l d F Y");

                //OPTION 2
                echo strftime("%a %d %h %Y <br>");
                setlocale(LC_TIME, "fr_FR.UTF8"); //Prend par defaut la date du jour 
                echo strftime("%a %d %h %Y");
               ?>

</body>

</html>