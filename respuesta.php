<?php
$nombre = $_POST["txtNombre"];
$apellido = $_POST["txtApellido"];
$edad= $_POST["txtEdad"];
$dia = $_POST["selDiaTrabajo"];
$jornada = $_POST["radJornada"];
$pasaTiempo = $_POST["checkPasatiempo"];
echo"Nombre: $nombre <br> Apellido: $apellido";
if($edad > 18){
    echo"<br> Es mayor de edad: $edad";
}else{
    echo"<br> Es menor de edad: $edad";
}
echo "<br>Dia de trabajo: $dia <br> Jornada de trabajo: $jornada <br>";
//echo "<br>Pasa Tiempos: $pasaTiempo";
//print_r($_POST);
//var_dump($_POST);
foreach ($pasaTiempo as $key => $value) {
    echo "Pasa Tiempo: " . $key+1 . " $value<br>";
}
$frutas = [
    "Dulce" => "Mango",
    "Acida" => "Limon",
    "Diuretica" => "Piña",
    "Afrodiciaca" => "Borojo"
];
$numeros = [23,"años",10.67,true];
foreach ($frutas as $key => $value) {
    echo "Frutas de tipo $key: $value<br>";
}
foreach ($numeros as $key => $value) {
    echo "index: $key, value: $value<br>";
}
echo $frutas["Dulce"];
unset($numeros[2]);
print_r(array_values($numeros));
$no = "Texto Normal";

echo is_array($no) ? "Array" : "No es un array";
echo 3>5 ? "mayor" : "menor";
?>