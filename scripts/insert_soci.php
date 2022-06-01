<?php

include '../includes/database.php';

$nom = $_POST['Nom'];
$DNI = $_POST['DNI'];
$p_cognom = $_POST['pcognom'];
$s_cognom = $_POST['scognom'];
$datadenaixament = date('Y-m-d', strtotime($_POST['datadenaixament']));
$email = $_POST['email'];
$telefon = $_POST['telefon'];


$query = "INSERT INTO Socis (Nom, DNI, 1rCognom, 2nCognom, DataDeNaixament, email, telefon ) 
VALUES ('$nom', '$DNI', '$p_cognom', '$s_cognom', '$datadenaixament', '$email', '$telefon')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../socis.php');
}else{
    echo mysqli_error($dbh);
}


$idSocis = null;
if(isset($_GET['id'])){
    $idSocis = $_GET['id'];
    $query = "SELECT * FROM Socis WHERE id = '$idSocis' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $idSocis = mysqli_fetch_assoc($result);
}

$action = 'scripts/insert_soci.php';
if($idSocis != null){
    $action = 'update.php';
}
?>

    <div class="container">

 
            
            
                <?php
                if($idSocis == null){
                    echo 'NOU CLIENT';
                }else{
                    echo 'EDITA EL CLIENT';
                }
               
