<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet 1</title>
    <link rel="stylesheet" href="x_tables.css">
<body>
<?php
$table = 3;
$length = 10;

echo "<h2> Table du " . $table . "</h2>";
for($i=1; $i<=$length; $i++)
 echo "<p>" . $table . " x " .  $i . " = ".$i * $table. "</p>";
?>
<a href="index.php"><button type="button">Retour</button></a>
</body>
</html>