<?php

include '../includes/database.php';

$nom = $_POST['nomSoci'];


$query = "INSERT INTO Socis (Nom, 1rCognom, 2nCognom, DataDeNaixament, email, telefon ) VALUES ('$Nom', '$1rCognom', '$2nCognom', '$DataDeNaixament', '$email', '$telefon')";

mysqli_query($dbh, $query);