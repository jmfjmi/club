<?php

include '../includes/database.php';
$fkidEquip = $_POST['fkidequip'];
$DNI = $_POST['DNI'];
$nom = $_POST['Nom'];
$p_cognom = $_POST['pcognom'];
$s_cognom = $_POST['scognom'];
$datadenaixament = date('Y-m-d', strtotime($_POST['datadenaixament']));
$Posicio= $_POST['Posició'];
$Numero = $_POST['Numero'];
$Procedencia = $_POST['Procedencia'];




$query = "INSERT INTO Jugadors (fkidequip,DNI, Nom, 1rCognom, 2nCognom, DataDeNaixament, 
Posició, Numero,Procedencia ) 
VALUES ('$fkidEquip','$DNI','$nom', '$p_cognom', 
'$s_cognom', '$datadenaixament', 
'$Posicio', '$Numero','$Procedencia')";

echo $query ;

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../jugadors.php');
}else{
    echo mysqli_error($dbh);
}


$idjugadors = null;
if(isset($_GET['id'])){
    $idJugadors = $_GET['id'];
    $query = "SELECT * FROM Socis WHERE id = '$idjugadors' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $idJugadors = mysqli_fetch_assoc($result);
}

$action = 'scripts/insertjugador.php';
if($idJugadors != null){
    $action = 'update_jugador.php';
}
?>

    <div class="container">

 
            
            
                <?php
                if($idJugadors== null){
                    echo 'NOU CLIENT';
                }else{
                    echo 'EDITA EL CLIENT';
                }
               
