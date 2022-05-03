<?php
include 'includes/head.php';
?>
</html>
<?php
include 'includes/header.php';
?>
   <table>
<thead>4
<tr>
<td>ID</td>
<td>DNI</td>
<td>NOM</td>
<td>1rCognom</td>
<td>2nCognom</td>
<td>DATA DE NAIXAMENT</td>

</tr>
</thead>
<tbody>
<?php
$query = "SELECT * FROM Jugadors";
$result = mysqli_query($dbh, $query) or die (mysqli_error($dbh));
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['fkidEquip']."</td>
<td>".$row['DNI']."</td>
<td>".$row['nom']."</td>
<td>".$row['1rCognom']."</td>
<td>".$row['2nCognom']."</td>
<td>".$row['DataDeNaixament']."</td>
<td>".$row['Posició']."</td>
<td>".$row['Numero']."</td>
<td>".$row['Procedencia']."</td>

</tr>";
}
?>
</tbody>
    </table>