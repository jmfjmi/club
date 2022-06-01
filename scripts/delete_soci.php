<?php

include '../includes/database.php';

$id = $_GET['id'];


$query = "DELETE FROM Socis where idSocis = '$id' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../socis.php');
}else{
    echo mysqli_error($dbh);
}
