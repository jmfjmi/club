<?php
include '../includes/database.php';

$nom = $_POST['Nom'];
$DNI = $_POST['DNI'];
$p_cognom = $_POST['pcognom'];
$s_cognom = $_POST['scognom'];
$datadenaixament = date('Y-m-d', strtotime($_POST['datadenaixament']));
$posició = $_POST['posicio'];
$numero = $_POST['numero'];


$query = "UPDATE Jugadors SET Nom='$nom' ,DNI='$DNI' , 1rCognom='$p_cognom' , 
2nCognom='$s_cognom' , DataDeNaixament='$datadenaixament' , posicio=$posició  ' , 
Numero='$Numero'  WHERE DNI = '$DNI' ";


$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../jugadors.php');
}else{
    echo mysqli_error($dbh);
}