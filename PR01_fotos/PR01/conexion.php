<!DOCTYPE html>
<?php
$con = mysqli_connect('localhost', 'root', 'DAW22015', 'BD_botiga_animals');
$sql = "SELECT * FROM tbl_raca ORDER BY raca_nom ASC";
$sql2 = "SELECT * FROM tbl_municipi ORDER BY municipi_nom ASC";
$query = mysqli_query($con,$sql);
$query2 = mysqli_query($con,$sql2);
?>
<html>
<head>
	
</head>
<body>
<label for="nombre">Raza:</label><br/><br/>
      <select name="raca">

      <?php while($filas = mysqli_fetch_array($query)){ ?>
        <option value="<?php echo $razas['raca_id']?>">
        	<?php echo $filas['raca_nom']?>
        </option>
        	<?php } ?>
        
      </select>

<label for="nombre">Población:</label><br/><br/>
        <select name="ciudad">
        <?php while($filas2 = mysqli_fetch_array($query2)){ ?>
        <option value="<?php echo $razas['municipi_id']?>">
        	<?php echo $filas2['municipi_nom']?>
        </option>
        	<?php } ?>
      </select>
</body>
</html>