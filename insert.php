<html>
<?php
include 'includes/head.php';
$soci = null;
if(isset($_GET['id'])){
    $idSocis = $_GET['id'];
    $query = "SELECT * FROM Socis WHERE idSocis = '".$_GET['id']."' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $soci = mysqli_fetch_assoc($result);
}

$action = 'scripts/insert_soci.php';
if($soci != null){
    $action = 'scripts/update.php';
}
?>


<body>
  
    <h1>REGISTRARTE</h1>

	<?php
include 'includes/header.php';
?>
    <form action="<?=$action?>" target="" method="POST">
    <input type="hidden" name="id" value="<?=$soci['idSocis']?>">

	<label for="nombre">Nom</label>
	<input type="text" name="Nom" value="<?=$soci['Nom']?>" id="nombre" placeholder="Escribe tu nombre"/>

	<label for="nombre">DNI</label>
	<input type="text" name="DNI" value="<?=$soci['DNI']?>"   placeholder="Escribe tu DNI"/>

    <label for="nombre">Llinatge</label>
	<input type="text" name="pcognom" value="<?=$soci['1rCognom']?>"id="pcognom" placeholder="1r cognom"/>

	<label for="apellidos">Segon llinatge</label>
	<input type="text" name="scognom"value="<?=$soci['2nCognom']?>" id="scognom" placeholder="2n cognom"/>

    <label for="apellidos">Telefon</label>
	<input type="text" name="telefon" value="<?=$soci['telefon']?>"id="telefon" placeholder="Introdueix el telefon"/>

	<label for="email"> Email</label>
	<input type="email" name="email" value="<?=$soci['email']?>" id="email" placeholder="Introdueix el teu email" required />

	<label for="telefon">Data de naixament </label>
	<input type="date" name="datadenaixament" value="<?=$soci['DataDeNaixament']?>" id="datadenaixament " placeholder="Escriu la data del teu naixament "/>
	
	<input type="submit" name="enviar" value="ENVIAR"/>
</form>



</html>

