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
	<input type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre"/>

	<label for="apellidos">Apellidos</label>
	<input type="text" name="apellidos" id="apellidos" placeholder="1r Apellido"/>

	<label for="email" />Email</label>
	<input type="email" name="email" id="email" placeholder="email" required />

	<label for="asunto">Asunto</label>
	<input type ="text" name="asunto" id="asunto" placeholder="titular de la consulta"/>

	<label for="mensaje">Mensaje</label>
	<textarea name="mensaje" for="mensaje" placeholder="describe brevemente en menos de 300 carácteres" maxlength="300"></textarea>
	
	<input type="submit" name="enviar" value="ENVIAR"/>
</form>


</body>

</html>