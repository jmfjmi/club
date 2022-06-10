<?php
include '../includes/database.php';

$idEquip= $_POST['idEquip'];
$Premis = $_POST['Premis'];
$Nom = $_POST['Nom'];
$fkidClub = $_POST['fkidClub'];
$fkidCategoria = $_POST['fkidCategoria'];
$idEquip = $_POST['id'];

$query = "UPDATE Equip SET Premis='$Premis', Nom='$Nom', fkidClub='$fkidClub', 
fkidCategoria='$fkidCategoria'  WHERE idEquip = '$idEquip' ";


$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../equip.php');
}else{
    echo mysqli_error($dbh);
}