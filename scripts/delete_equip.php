<?php

include '../includes/database.php';

$id = $_GET['id'];


$query = "DELETE FROM Equip where idEquip = '$id' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../equip.php');
}else{
    echo mysqli_error($dbh);
}