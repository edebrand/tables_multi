<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet 2</title>
    <link rel="stylesheet" href="x_tables.css">
<body>
<form action="x_tables_dropdown.php" method="post">
  <label for="table">Choisir la table :</label>
  <select id="table" name="table">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
  </select>
  <input type="submit" value="OBTENIR">
</form>
<?php
$length = 10;
$i = 1;
if(isset($_POST['table'])){
$table = $_POST['table'];
echo "<h2>Table du ".$table. "</h2>";
for($i=1; $i<=$length; $i++) {
    echo "<p>" . $table . " x " . $i . " = " . $i * $table . "</p>";
}
}?>
<a href="index.php"><button type="button">Retour</button></a>
</body>
</html>