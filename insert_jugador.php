<html>
<?php
include 'includes/head.php';
$DNI = null;
if(isset($_GET['DNI'])){
   	$DNI = $_GET['DNI'];
    $query = "SELECT * FROM Jugadors WHERE DNI = '".$_GET['DNI']."' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $jugadors = mysqli_fetch_assoc($result);
}

$action = 'scripts/insertjugador.php';
if($jugadors != null){
    $action = 'scripts/update_jugador.php';
}
?>


<body>
  
    <h1>REGISTRARTE COM A JUGADOR</h1>
   
	<?php
include 'includes/header.php';
?>
    <form action="<?=$action?>" target="" method="POST">
    <input type="hidden" name="id" value="<?=$jugadors['DNI']?>">

	
	<label for="nombre">DNI</label>
	<input type="text" name="DNI" value="<?=$jugadors['DNI']?>"  <?=($jugadors != null) ? 'readonly' : '';?>  
	 placeholder="Escribe tu DNI" />


	<label for="nombre">Nom</label>
	<input type="text" name="Nom" value="<?=$jugadors['nom']?>" id="nombre" placeholder="Escribe tu nombre"/>

	
    <label for="nombre">Llinatge</label>
	<input type="text" name="pcognom" value="<?=$jugadors['1rCognom']?>"id="pcognom" placeholder="1r cognom"/>

	<label for="apellidos">Segon llinatge</label>
	<input type="text" name="scognom"value="<?=$jugadors['2nCognom']?>" id="scognom" placeholder="2n cognom"/>

	<label for="Data de naixament">Data de naixament </label>
	<input type="date" name="datadenaixament" id="datadenaixament " placeholder="Escriu la data del teu naixament "/>
	
	<label for="Posició"> Posició</label>
	<input type="text" name="posicio"value="<?=$jugadors['Posició']?>" id="Posició" placeholder="Introdueix la teva posicio" required />

	<label for="Numero">Numero</label>
	<input type="number" name="numero" value="<?=$jugadors['Numero']?>"id="Numero" placeholder="Introdueix el numero"/>
	
	<label for="nombre">Procedencia</label>
	<input type="text" name="Procedencia" value="<?=$jugadors['Procedencia']?>"   placeholder="Escribe la teva procedencia"/>

	
	<select name="fkidEquip">
		<?php
		$query = "SELECT * FROM Equip";
		$result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
		while($equip = mysqli_fetch_assoc($result)){
			echo '<option value="' . $equip['idEquip'] . '">'. $equip['Nom'] . '</option>';
		}
		?>
	</select>
	<input type="submit" name="enviar" value="ENVIAR"/>
</form>



</html>
