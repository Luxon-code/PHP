<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de datos prueba</title>
</head>
<body>
    <form action="listaPokemon.php" method="post">
        <h1>Insertar en base de datos prueba</h1>
        <label for="txtNombre">Nombre:</label>
        <input type="text" name="txtNombre" id="txtNombre">
        <br>
        <label for="txtCodigo">Codigo:</label>
        <input type="number" name="txtCodigo" id="txtCodigo">
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>