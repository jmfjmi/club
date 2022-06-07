<?php
include '../includes/database.php';

$nom = $_POST['Nom'];
$p_cognom = $_POST['pCognom'];
$s_cognom = $_POST['sCognom'];
$datadenaixament = $_POST['DataDeNaixament'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];

$query = "UPDATE Socis SET Nom = '$nom', 1rCognom = '$p_cognom', 2nCognom = '$s_cognom', DataDeNaixament = '$datadenaixament', email = '$email', telefon = '$telefon';

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../socis.php');
}else{
    echo mysqli_error($dbh);
