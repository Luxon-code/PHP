<?php
try {
    $pdo = new PDO('mysql:dbname=pokemon;host=Localhost','root','');
    if($pdo){
        echo "Coneccion exitosa";
    }
} catch (PDOException $e) {
    die('Error: No fue posible conectar: '. $e->getCode());
}
?>