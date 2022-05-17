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
    <td>ESCUT</td>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
$query = "SELECT * FROM Club";
$result = mysqli_query($dbh, $query) or die (mysqli_error($dbh));
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>
<td>".$row['idClub']."</td>
<td>".$row['nom']."</td>
<td>".$row['Escut']."</td>
</tr>";
}
?>
    </tr>
  </tbody>
</table>