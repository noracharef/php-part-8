<!DOCTYPE html>

<html lang="fr" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="HTML">
    <title>Exerice php partie 8 exercice 6</title>
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
        <h2>Exercice 6<h2>
                <p>Afficher le nombre de jours dans le mois de février de l'année 2016.
                </p>

                <?php
                
                //OPTION 1
                //$start_date = strtotime("2016-02");
                //$end_date = strtotime("2016-03");

                //echo "le nombre de jours dans le mois de février de l'année 2016 est de "
                    //. ($end_date - $start_date) / 86400 . " jours";

        
                //OPTION 2
                $nbdays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
                echo "le nombre de jours dans le mois de février de l'année 2016 est de $nbdays jours"; 
                
                //OPTION 3 
                //$nico = date("t", mktime(0,0,0,2,1,2016)); //"t" correspond aux nombres de jours dans le mois
                //echo "le nombre de jours dans le mois de février de l'année 2016 est de $nico jours";
                
                ?>

</body>

</html>