<?php
include 'includes/head.php';
?>
</html>
<?php
include 'includes/header.php';
?>
<body>
    <a href="index.php">INDEX</a>
    <a href="pagina2.php">PLACA BASE</a>
    <h1>REGISTRARTE</h1>
    <form action="/action_page.php" method="POST">
        <label for="fname">Introduir DNI:</label><br>
        <input type="text" id="DNI" name="DNI" placeholder="DNI"><br> 
        <label for="fname">Introduir nom:</label><br>
        <input type="text" id="Nom" name="Nom" placeholder="Nom"><br>
        <label for="lname">Introduir 1r cognom:</label><br>
        <input type="text" id="1rCognom" name="1rCognom" placeholder="1rCognom"><br><br>
        <label for="lname">Introduir 2n cognom:</label><br>
        <input type="text" id="2nCognom" name="2nCognom" placeholder="2nCognom"><br><br>
        <label for="lname">Introduir data de naixament:</label><br>
        <input type="date" id="DataDeNaixament" name="DataDeNaixament"><br><br>
        <label for="lname">Introduir email:</label><br>
        <input type="email" id="email" name="email" placeholder="exemple@gmail.com"><br><br>
        <label for="lname">Introduir telefon:</label><br>-
        <input type="number" id="telefon" name="telefon" placeholder="000000000"><br><br>
        <input type="submit" value="Confirmar">
    </form>
</body>

</html>