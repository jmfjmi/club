<?php
include 'includes/head.php';
?>
</html>
<?php
include 'includes/header.php';
?>
   <table>
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

</tr>";
}
?>
</tbody>
    </table>