<?php

include '../includes/database.php';
$idEquip= $_POST['idEquip'];
$Premis = $_POST['Premis'];
$Nom = $_POST['Nom'];
$fkidClub = $_POST['fkidClub'];
$fkidCategoria = $_POST['fkidCategoria'];

$query = "INSERT INTO Equip (IdEquip,Premis, Nom, fkidClub, fkidCategoria ) 
VALUES ('$Premis', '$Nom', '$fkidClub', '$fkidCategoria','$idEquip ')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../equip.php');
}else{
    echo mysqli_error($dbh);
}


$idEquip = null;
if(isset($_GET['id'])){
    $idEquip = $_GET['id'];
    $query = "SELECT * FROM Equip WHERE id = '$idEquip' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $idEquip = mysqli_fetch_assoc($result);
}

$action = 'scripts/insert_equip.php';
if($idEquip != null){
    $action = 'update_equip.php';
}
?>

    <div class="container">

 
            
            
                <?php
                if($idEquip == null){
                    echo 'NOU CLIENT';
                }else{
                    echo 'EDITA EL CLIENT';
                }
               
