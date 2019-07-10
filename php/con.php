<?php

// Datos de conexión a la base de datos Mysql
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$bd = 'reminders';

// Conexion a la BD a traves del sistema mysqli

$conexion = new mysqli($servidor, $usuario, $password, $bd);

// Comprobar si la conexion es correcta 

if ($conexion->connect_error) {
    die('Error conectando a la base de datos.' . $conexion->connect_error);
} else {
    echo 'Conexión con la base de datos establecida.';
}

// Mostrar datos de la tabla clientes.
// $resultados = $conexion->query('select * from clientes');

// Pintar Datos
// foreach ($resultados as $value) {
//     echo $value['id'] . '<br>';
//     echo $value['nombre'] . '<br>';
//     echo $value['apellidos'] . '<br>';
//     echo $value['movil'] . '<br>';
// }

// Insertar Datos
// $insertar = $conexion->query(
//     'INSERT INTO clientes (nombre, apellidos, movil) 
//         VALUES (
//             "' . $name . '",
//             "' . $apell . '",
//             "' . $movil . '")'
// );
