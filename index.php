<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="respuesta.php" method="post">
    <label > Nombre:</label>
    <input type="text" name="txtNombre" id="txtNombre">
    <br>
    <label > Apellido:</label>
    <input type="text" name="txtApellido" id="txtApellido">
    <br>
    <label > Edad:</label>
    <input type="number" name="txtEdad" id="txtEdad">
    <br>
    <select name="selDiaTrabajo" id="">
        <option value="Lunes">Lunes</option>
        <option value="Martes">Martes</option>
        <option value="Miercoles">Miercoles</option>
        <option value="Jueves">Jueves</option>
        <option value="Viernes">Viernes</option>
    </select>
    <br>
    <label for="radJornada">Seleccione:</label>
    <input type="radio" name="radJornada" value="Dia">
    <label for="Dia">Dia</label>
    <input type="radio" name="radJornada" value="Tarde">
    <label for="Tarde">Tarde</label>
    <input type="radio" name="radJornada" value="Noche">
    <label for="Noche">Noche</label>
    <br>
    <label for="">Seleccione:</label>
    <input type="checkbox" name="checkPasatiempo[]" id="" value="Jugar Futbol">
    <label for="">Jugar Futbol</label>
    <input type="checkbox" name="checkPasatiempo[]" id="" value="Bicicleta">
    <label for="">Bicicleta</label>
    <input type="checkbox" name="checkPasatiempo[]" id="" value="Bailar">
    <label for="">Bailar</label>
    <input type="checkbox" name="checkPasatiempo[]" id="" value="Nadar">
    <label for="">Nadar</label>
    <br>
    <input type="submit" value="Registrar">
   </form>
</body>
</html>