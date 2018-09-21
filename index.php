<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="resultat.php" method="post">
<?php
$nombre = $_POST['nombre'];
$aleatoire = rand(1,10);
$solution = $nombre*$aleatoire;
echo "<br> Combien vaut".$nombre."X".$aleatoire;
?>
    <input type="hidden" name="solution" value="<?php echo $solution ?>">
    <input type="number" name="resultat" id="resultat1">
    <input type="submit" value="voir resultat">
</form>

</body>
</html>