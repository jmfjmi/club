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
<td>PAIS</td>
<td>CP</td>
</tr>
</thead>
<tbody>
<?php
$query = "SELECT Nom FROM Socis";
$result = mysqli_query($dbh, $query);
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['id']."</td>
<td>".$row['nom']."</td>
<td>".$row['pais']."</td>
<td>".$row['codipostal']."</td>
</tr>";
}
?>
</tbody>
    </table>