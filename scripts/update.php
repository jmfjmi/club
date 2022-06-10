 <?php
include '../includes/database.php';

$nom = $_POST['Nom'];
$p_cognom = $_POST['pcognom'];
$s_cognom = $_POST['scognom'];
$datadenaixament = $_POST['datadenaixament'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$idSocis = $_POST['id'];

$query = "UPDATE Socis SET Nom ='$nom', 1rCognom ='$p_cognom', 2nCognom ='$s_cognom', 
DataDeNaixament ='$datadenaixament', email ='$email', telefon = '$telefon'  
WHERE idSocis = '$idSocis' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../socis.php');
}else{
    echo mysqli_error($dbh);
}