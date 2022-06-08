<?php
include 'includes/head.php';
?>

<body>
    <h1>EL CLUB</h1>
<table>
  <tr>
  <th>ID</th>
  <th>DNI</th>
  <th>Nom</th>
  <th>1r cognom</th>
  <th>2r cognom</th>
  <th>DataDeNaixament</th>
  <th>email</th>
  <th>telefon</th>
  <th>Club</th>
  <th>ID</th>
</tr>
<?php
include 'includes/header.php';
$query = $sql = "SELECT s.*, c.nom as nom_club FROM Socis as s 
                  LEFT JOIN ClubSocis as cs ON (s.idSocis = cs.fkidSocis) 
                  LEFT JOIN Club as c ON (c.idClub = cs.fkidClUB)";
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
          <td>".$row['nom_club']."</td>
          <td>
            <a href='insert.php?id=".$row['idSocis']."'><i class='bi bi-pencil'></i></a>
            <a href='scripts/delete_soci.php?id=".$row['idSocis']."'>Eliminar</a>
          </td>
        </tr>";
}
?>
</table>



</body>
</html>