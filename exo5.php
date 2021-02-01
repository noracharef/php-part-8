<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 8 exercice 5</title>
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
        <h2>Exercice 5<h2>
                <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.
                </p>

                <?php
              
                //OPTION 1
                $start_date = strtotime("2016-05-16");
                $end_date = strtotime("2021-02-01");

                echo "les nombres de jours qui sépare la date du jour avec le 16 mai 2016  est "
                    . ($end_date - $start_date) / 86400;

                //OPTION 2
                //$start_date = strtotime("2016-05-16");
                //$end_date = time(); ici pas besoin de définir la date
                //echo "les nombres de jours qui sépare la date du jour avec le 16 mai 2016  est "
                //. floor(($end_date - $start_date) / 86400);

                echo "<hr>";

                //OPTION 3
                //Methode objet
                $date1 = new DateTime(date("d-m-Y"));
                $date2 = new DateTime(date("16-05-2016"));

                echo "<hr>";               

                $interval = $date1->diff($date2);
                var_dump ($interval);
                $nbdays = $interval->format("%R %a");

                echo "<hr>";

                //OPTION 4
                //$nbdays = $interval->days;
                echo $nbdays;

                ?>

</body>

</html>