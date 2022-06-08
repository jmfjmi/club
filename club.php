<?php
include 'includes/head.php';
?>
<h1>CLUBS</h1>

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
<td><img src='/images/".$row['Escut']."' alt='Italian Trulli'></td>
</tr>";
}
?>
    </tr>
  </tbody>
</table>