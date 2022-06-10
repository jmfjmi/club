<?php

include '../includes/database.php';

$Premis = $_POST['Premis'];
$Nom = $_POST['Nom'];
$fkidClub = $_POST['fkidClub'];
$fkidCategoria = $_POST['fkidCategoria'];

$query = "INSERT INTO Equip (Premis, Nom, fkidClub, fkidCategoria ) 
VALUES ('$Premis', '$Nom', '$fkidClub', '$fkidCategoria' )";

echo $query;
$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../equip.php');
}else{
    echo mysqli_error($dbh);
}

