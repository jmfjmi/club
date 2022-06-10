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
    <td>IDEquip</td>
    <td>DNI</td>
    <td>NOM</td>
    <td>1rCognom</td>
    <td>2nCognom</td>
    <td>DATA DE NAIXAMENT</td>
    <td>Posició</td>
    <td>Numero</td>
    <td>Procedencia</td>
    </tr>
  </thead>
  <tbody>
  <?php
$query = "SELECT * FROM Jugadors";
$result = mysqli_query($dbh, $query) or die (mysqli_error($dbh));
while ($row = mysqli_fetch_assoc($result)) 
echo "<tr>
<td>".$row['fkidEquip']."</td>
<td>".$row['DNI']."</td>
<td>".$row['nom']."</td>
<td>".$row['1rCognom']."</td>
<td>".$row['2nCognom']."</td>
<td>".$row['DataDeNaixament']."</td>
<td>".$row['Posicio']."</td>
<td>".$row['Numero']."</td>
<td>".$row['Procedencia']."</td>
<td>
  <a href='insert_jugador.php?id=".$row['DNI']."'><i class='bi bi-pencil'></i></a>
  <a href='delete_jugador.php?id=".$row['DNI']."'><i class='bi bi-trash'></i></a>
</td>

</tr>";
?>
  </tbody>
</table>
<footer> <a class="btn btn-primary" href="insert_jugador.php">INSERTAR NOU CLIENT</a></footer>