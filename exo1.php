<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 8 exercice 1</title>
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
        <h2>Exercice 1<h2>
                <p>Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)</p>

                <?php

                //OPTION 1 Methode objet
                $date2=new DateTime();
                echo $date2->format("j/m/Y"); //-> ici correspond à la methode (le format) pour afficher un attributs il faut utiliser un .
                echo "<br>";

                //OPTION 2
                echo date("d/m/Y"); //Methode procedural      
                ?>

</body>

</html>