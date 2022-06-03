
 <h1>SOCIS</h1>

<?php
include 'includes/head.php';
?>
</html>
<?php
include 'includes/header.php';
?>
    <table class="table">
  <thead>
 
  <tr>
    <td>ID</td>
<td>DNI</td>
<td>NOM</td>
<td>1rCognom</td>
<td>2nCognom</td>
<td>DATA DE NAIXAMENT</td>
<td>EMAIL</td>
<td>TELEFON</td>
<td>opcions</td>
    </tr>
  </thead>
  <tbody>
  <?php
$query = "SELECT * FROM Socis";
$result = mysqli_query($dbh, $query) or die (mysqli_error($dbh));
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['idSocis']."</td>
<td>".$row['DNI']."</td>
<td>".$row['Nom']."</td>
<td>".$row['1rCognom']."</td>
<td>".$row['2nCognom']."</td>
<td>".$row['DataDeNaixament']."</td>
<td>".$row['email']."</td>
<td>".$row['telefon']."</td>
<td>
  <a href='insert.php?id=".$row['idSocis']."'><i class='bi bi-pencil'></i></a>
  <a href='scripts/delete_soci.php?id=".$row['idSocis']."'>Eliminar</a>
</td>
</tr>";
}
?>
  </tbody>

</table>


<footer> <a class="btn btn-primary" href="insert.php">INSERTAR NOU CLIENT</a></footer>