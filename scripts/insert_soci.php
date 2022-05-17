<?php

include '../includes/database.php';

$nom = $_POST['Nom'];
$DNI = $_POST['DNI'];
$p_cognom = $_POST['pCognom'];
$s_cognom = $_POST['sCognom'];
$datadenaixament = $_POST['DataDeNaixament'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];


$query = "INSERT INTO Socis (Nom, DNI, 1rCognom, 2nCognom, DataDeNaixament, email, telefon ) VALUES ('$nom', '$DNI', '$p_cognom', '$s_cognom', '$datadenaixament', '$email', '$telefon')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../socis.php');
}else{
    echo mysqli_error($dbh);
}
