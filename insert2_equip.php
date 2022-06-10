<html>
<?php
include 'includes/head.php';
$equip = null;
if(isset($_GET['id'])){
    $idEquip = $_GET['id'];
    $query = "SELECT * FROM Equip WHERE idEquip = '".$_GET['id']."' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $equip = mysqli_fetch_assoc($result);
}

$action = 'scripts/insert_equip.php';
if($equip != null){
    $action = 'scripts/update_equip.php';
}
?>


<body>
  
    <h1>REGISTRARTE</h1>

	<?php
include 'includes/header.php';
?>
    <form action="<?=$action?>" target="" method="POST">
    <input type="hidden" name="idEquip" value="<?=$equip['idEquip']?>">

	<label for="nombre">Premis</label>
	<input type="text" name="Premis" value="<?=$equip['Premis']?>" id="Premis" placeholder="Escribe los premios de tu equipo"/>

	<label for="nombre">Nom</label>
	<input type="text" name="Nom" value="<?=$equip['Nom']?>" id="Nom"  placeholder="Escribe el nombre del equipo"/>

    <select name="fkidCategoria">
		<?php
		$query = "SELECT * FROM Categoria";
		$result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
		while($categoria = mysqli_fetch_assoc($result)){
			echo '<option value="' . $categoria['idCategoria'] . '">'. $categoria['Nom'] . '</option>';
		}
		?>
	</select>

	<select name="fkidClub">
		<?php
		$query = "SELECT * FROM Club";
		$result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
		while($club = mysqli_fetch_assoc($result)){
			echo '<option value="' . $club['idClub'] . '">'. $club['nom'] . '</option>';
		}
		?>
	</select>

	<input type="submit" name="enviar" value="ENVIAR"/>
</form>



</html>

