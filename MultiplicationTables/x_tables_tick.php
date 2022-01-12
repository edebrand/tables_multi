<!DOCTYPE html>
<html>
<body>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet 3</title>
    <link rel="stylesheet" href="x_tables.css">
<h1>Choisir une table de multiplication</h1>

<form action="x_tables_tick.php" method="post">
  <input type="checkbox" id="table1" name="table[]" value="1">
  <label for="table1">1</label><br>
  <input type="checkbox" id="table2" name="table[]" value="2">
  <label for="table2">2</label><br>
  <input type="checkbox" id="table3" name="table[]" value="3">
  <label for="table3">3</label><br>
  <input type="checkbox" id="table4" name="table[]" value="4">
  <label for="table4">4</label><br>
  <input type="checkbox" id="table5" name="table[]" value="5">
  <label for="table5">5</label><br>
  <input type="checkbox" id="table6" name="table[]" value="6">
  <label for="table6">6</label><br>
  <input type="checkbox" id="table7" name="table[]" value="7">
  <label for="table7">7</label><br>
  <input type="checkbox" id="table8" name="table[]" value="8">
  <label for="table8">8</label><br>
  <input type="checkbox" id="table9" name="table[]" value="9">
  <label for="table9">9</label><br>
  <input type="submit" value="OBTENIR">
</form>

<?php
$length = 10; ?>
<div class="container">
  <?php if($_POST){
    for($i = 0; $i < count($_POST['table']); $i++){?>
      <div class="table"> 
        <?php echo "<h2> Table du " . $_POST['table'][$i] . "</h2>";
        for($j=1; $j<=$length; $j++) {?>
        <p>
          <?php echo $_POST['table'][$i] . " x " . $j . " = ". $j * $_POST['table'][$i];
        };?>
        </p>
      </div>
    <?php }
  }?>
</div>
<a href="index.php"><button type="button">Retour</button></a>
</body>
</html>