<?php
include '../includes/database.php';

$Premis = $_POST['Premis'];
$Nom = $_POST['Nom'];
$fkidClub = $_POST['fkidClub'];
$fkidCategoria = $_POST['fkidCategoria'];

$query = "INSERT INTO Equip (Premis, Nom, fkidClub, fkidCategoria ) 
VALUES ('$Premis', '$Nom', '$fkidClub', '$fkidCategoria' )";

$query = "UPDATE Equip SET Premis='$Premis', Nom='$Nom', fkidClub='$fkidClub', 
fkidCategoria='$fkidCategoria'  WHERE idEquip = '$idEquip' ";


$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../index.php');
}else{
    echo mysqli_error($dbh);
}