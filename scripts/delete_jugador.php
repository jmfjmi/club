<?php

include '../includes/database.php';

$id = $_GET['id'];


$query = "DELETE FROM Jugadors where idjugadors = '$id' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../jugadors.php');
}else{
    echo mysqli_error($dbh);
}
