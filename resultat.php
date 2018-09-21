<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="traitement.php"> rejouer</a>
</body>
</html>
<?php
    $nombre1 = $_POST['nombre'];
   // $aleatoire = rand(1,10);
    $reponse1 = $nombre1 * $aleatoire;
    $resultat =$_POST['resultat'];
    $solution=$_POST['solution'];
    if($resultat == $solution)
    {
        echo "bravo tu as trouvé";
    }
    else if($solution != $resultat)
    {
        echo "tu as faussé";

    }
    else
    {

    }
?>