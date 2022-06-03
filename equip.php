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
<td>NOM</td>
<td>PREMIS</td>
<td>FKIDCLUB</td>
<td>FKIDCATEGORIA</td>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
$query = "SELECT * FROM Equip";
$result = mysqli_query($dbh, $query) or die (mysqli_error($dbh));
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['idEquip']."</td>
<td>".$row['Nom']."</td>
<td>".$row['Premis']."</td>
<td>".$row['fkidClub']."</td>
<td>".$row['fkidCategoria']."</td>
<td>
  <a href='insert_equip.php?id=".$row['idEquip']."'><i class='bi bi-pencil'></i></a>
  <a href='scripts/delete_equip.php?id=".$row['idEquip']."'>Eliminar</a>
</td>
</tr>";
}
?>
  </tbody>

</table>


<footer> <a class="btn btn-primary" href="insert_equip.php">INSERTAR NOU CLIENT</a></footer>

