<!DOCTYPE html>
<html>

<head>
    <title>PP'S PAGE</title>
    <meta charset="utf-8" />
    <title>PROCESADORS</title>
    <?php
include 'includes/head.php';
?>
    <link href="style.css"
    rel="stylesheet" type="text/css">
</head>

<body>
    <a href="index.html">INDEX</a>
    <a href="pagina2.html">PLACA BASE</a>
    <h1>REGISTRARTE</h1>
    <form action="/action_page.php">
        <label for="fname">Introduir nom:</label><br>
        <input type="text" id="Nom" name="Nom" placeholder="Nom"><br>
        <label for="lname">Introduir cognoms:</label><br>
        <input type="text" id="Cognoms" name="Cognoms" placeholder="Cognoms"><br><br>
        <label for="lname">Introduir email:</label><br>
        <input type="email" id="Email" name="Email" placeholder="exemple@gmail.com"><br><br>
        <label for="lname">Introduir data de naixament:</label><br>
        <input type="date" id="DataDeNaixament" name="DataDeNaixament"><br><br>
        <input type="submit" value="Submit">
    </form>

</body>

</html>