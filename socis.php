<?php
include 'includes/head.php';
?>
</html>
<?php
include 'includes/header.php';
?>
    <table class="table">
  <thead>
  <a class="btn btn-primary" href="new-client.php">INSERTAR NOU CLIENT</a>
  <tr>
    <td>ID</td>
<td>DNI</td>
<td>NOM</td>
<td>1rCognom</td>
<td>2nCognom</td>
<td>DATA DE NAIXAMENT</td>
<td>EMAIL</td>
<td>TELEFON</td>
    </tr>
  </thead>
  <tbody>
  <?php
$query = "SELECT * FROM Socis";
$result = mysqli_query($dbh, $query) or die (mysqli_error($dbh));
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['idSocis']."</td><td> 
<td>".$row['DNI']."</td><td> 
<td>".$row['Nom']."</td><td>  
<td>".$row['1rCognom']."</td> <td>
<td>".$row['2nCognom']."</td> <td>
<td>".$row['DataDeNaixament']."</td><td> 
<td>".$row['email']."</td><td>
<td>".$row['telefon']."</td> <td> 
<a class='btn btn-primary' href='new-client.php?id=".$row['id']."'>Editar</a></td>


</tr>";
}
?>
  </tbody>
</table>