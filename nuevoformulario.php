<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/formulario.css">

    <script sec="validar.js"></script>

</head>

<body>
       
     <form action="nuevoregistrar.php" method="post"
        onsubmit="return validar();">
       
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" >

        <label for="Telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono" >

        <label for="correo">E-Mail:</label>
        <input type="text" name="correo" id="correo">

        <label for="sexo">Sexo:</label>
        <input type="radio" name="sexo" id="sexo" value="Femenino" >Femenino
        <input type="radio" name="sexo" id="sexo" value="Masculino" >Masculino

        <label for="ecivil:">Estado Civil</label>

        <input type="radio" name="ecivil" id="ecivil" value="casado">Casado/a
        <input type="radio" name="ecivil" id="ecivil" value="soltero">Soltero/a
        <input type="radio" name="ecivil" id="ecivil" value="divorciado">Divorciado/a
        <input type="radio" name="ecivil" id="ecivil" value="viudo">Viudo


        <label for="peliculas">Generos de Peliculas:</label>

        <input type="checkbox" name="peliculas[]" id="peliculas" value="Acción"> Acción
        <input type="checkbox" name="peliculas[]" id="peliculas" value="Terror"> Terror
        <input type="checkbox" name="peliculas[]" id="peliculas" value="Aventuras"> Aventuras
        <input type="checkbox" name="peliculas[]" id="peliculas" value="Ciencia Ficcion"> Ciencia Ficción

        <input type="submit" value="Registrar" name="registrar" id="registrar">

    </form>

    

</body>
</html>