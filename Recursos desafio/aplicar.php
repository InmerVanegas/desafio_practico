<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        $carnet = $_POST["carnet"];
        $departamento = $_POST["departamento"];
        $edad = $_POST["edad"];
        $genero = $_POST["genero"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $num_telefono = $_POST["num_telefono"];
        $carrera = $_POST["carrera"];
        $salario = $_POST["salario"];
        
        // Imprimir los datos en pantalla
        echo "Nombre: " . $nombre . "<br>";
        echo "Apellidos: " . $apellidos . "<br>";
        echo "Carnet: " . $carnet . "<br>";
        echo "Departamento: " . $departamento . "<br>";
        echo "Edad: " . $edad . "<br>";
        echo "Género: " . $genero . "<br>";
        echo "Fecha de Nacimiento: " . $fecha_nacimiento . "<br>";
        echo "Número de Teléfono: " . $num_telefono . "<br>";
        echo "Carrera: " . $carrera . "<br>";
        echo "Prestación Salarial: " . $salario . "<br>";
    }
?>
