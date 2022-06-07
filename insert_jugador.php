<html>
<?php
include 'includes/head.php';
$jugadors = null;
if(isset($_GET['id'])){
    $idjugadors = $_GET['id'];
    $query = "SELECT * FROM Jugadors WHERE DNI = '".$_GET['id']."' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $Jugadors = mysqli_fetch_assoc($result);
}

$action = 'scripts/insertjugador.php';
if($jugadors != null){
    $action = 'scripts/update_jugador.php';
}
?>
<select name="fkidEquip">
	<option value=1>Mallorca</option>
</select>

<body>
  
    <h1>REGISTRARTE COM A JUGADOR</h1>
   
	<?php
include 'includes/header.php';
?>
    <form action="<?=$action?>" target="" method="POST">
    <input type="hidden" name="id" value="<?=$jugadors['DNI']?>">

	
	<label for="nombre">DNI</label>
	<input type="text" name="DNI" value="<?=$jugadors['DNI']?>"   placeholder="Escribe tu DNI"/>


	<label for="nombre">Nom</label>
	<input type="text" name="Nom" value="<?=$jugadors['Nom']?>" id="nombre" placeholder="Escribe tu nombre"/>

	
    <label for="nombre">Llinatge</label>
	<input type="text" name="pcognom" value="<?=$jugadors['1rCognom']?>"id="pcognom" placeholder="1r cognom"/>

	<label for="apellidos">Segon llinatge</label>
	<input type="text" name="scognom"value="<?=$jugadors['2nCognom']?>" id="scognom" placeholder="2n cognom"/>

	<label for="Data de naixament">Data de naixament </label>
	<input type="date" name="datadenaixament" id="datadenaixament " placeholder="Escriu la data del teu naixament "/>
	
	<label for="nombre">Procedencia</label>
	<input type="text" name="Procedencia" value="<?=$jugadors['Procedencia']?>"   placeholder="Escribe la teva procedencia"/>


	<label for="Posició"> Posició</label>
	<input type="text" name="posicio"value="<?=$jugadors['Posició']?>" id="Posició" placeholder="Introdueix la teva posicio" required />



	<label for="Numero">Numero</label>
	<input type="text" name="Numero" value="<?=$jugadors['Numero']?>"id="telefon" placeholder="Introdueix el numero"/>

	<input type="submit" name="enviar" value="ENVIAR"/>
</form>



</html>
