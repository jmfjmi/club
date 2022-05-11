<?php

include '../includes/database.php';

$nom = $_POST['nomSoci'];




$query = "INSERT INTO soci (nom, cognoms, naixament) VALUES ('$nom', '', '')";

mysqli_query($dbh, $query);