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
    <form action="#" target="" method="get" name="formDatosPersonales">

	<label for="nombre">Nombre</label>
	<input type="text" name="Nom" id="nombre" placeholder="Escribe tu nombre"/>

    <label for="nombre">Nombre</label>
	<input type="text" name="DNI" id="nombre" placeholder="Introduce tu DNI"/>

	<label for="apellidos">Apellidos</label>
	<input type="text" name="pCognom" id="apellidos" placeholder="1r Apellido"/>

    <label for="apellidos">Apellidos</label>
	<input type="text" name="sCognom" id="apellidos" placeholder="2n Apellido"/>

	<label for="email" />Email</label>
	<input type="email" name="email" id="email" placeholder="email" required />

	<label for="telefon">telefon</label>
	<input type="text" name="telefon" id="telefon" placeholder="Escriu el telefon"/>
	
	<input type="submit" name="enviar" value="ENVIAR"/>
</form>


</body>

</html>