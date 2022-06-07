<html>
<?php
include 'includes/head.php';
$soci = null;
if(isset($_GET['id'])){
    $idEquip = $_GET['id'];
    $query = "SELECT * FROM Equip WHERE idEquip = '".$_GET['id']."' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $soci = mysqli_fetch_assoc($result);
}

$action = 'scripts/insert_equip.php';
if($soci != null){
    $action = 'scripts/update_equip.php';
}
?>


<body>
  
    <h1>REGISTRARTE</h1>

	<?php
include 'includes/header.php';
?>
    <form action="<?=$action?>" target="" method="POST">
    <input type="hidden" name="id" value="<?=$equip['idEquip']?>">

	<label for="nombre">Premis</label>
	<input type="text" name="Premis" value="<?=$equip['Premis']?>" id="Premis" placeholder="Escribe los premios de tu equipo"/>

	<label for="nombre">Nom</label>
	<input type="text" name="Nom" value="<?=$equip['Nom']?>" id="Nom"  placeholder="Escribe el nombre del equipo"/>

    <label for="nombre">fkidClub</label>
	<input type="text" name="fkidClub" value="<?=$equip['fkidClub']?>"id="fkidClub" placeholder="Club"/>

	<label for="apellidos">Segon llinatge</label>
	<input type="text" name="fkidCategoria"value="<?=$equip['fkidCategoria']?>" id="fkidCategoria" placeholder="Categoria"/>

	
	<input type="submit" name="enviar" value="ENVIAR"/>
</form>



</html>

