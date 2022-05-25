<?php
include '../includes/database.php';
$nom = $_POST['Nom'];
$DNI = $_POST['DNI'];
$p_cognom = $_POST['pcognom'];
$s_cognom = $_POST['scognom'];
$datadenaixament = date('Y-m-d', strtotime($_POST['datadenaixament']));
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$id_socis = $_POST['id'];

$query = "UPDATE Socis SET Nom='$nom' ,DNI='$DNI' , 1rCognom='$p_cognom' , 
2nCognom='$s_cognom' , DataDeNaixament='$datadenaixament' , email='$email' , 
telefon='$telefon'  WHERE idSocis = '$id_socis' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../index.php');
}else{
    echo mysqli_error($dbh);
}