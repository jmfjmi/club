<?php

include '../includes/database.php';

$DNI = $_GET['DNI'];


$query = "DELETE FROM Jugadors where DNI = '$DNI' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../jugadors.php');
}else{
    echo mysqli_error($dbh);
}
